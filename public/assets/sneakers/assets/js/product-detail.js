$(document).ready(function () {
    // Hàm tính toán thời gian tương đối
    function calculateRelativeTime(time) {
        const now = new Date();
        const givenTime = new Date(time);

        if (isNaN(givenTime.getTime())) {
            console.error("Thời gian không hợp lệ:", time);
            return time;
        }

        const diffInSeconds = Math.floor((now - givenTime) / 1000);

        if (diffInSeconds < 60) {
            return `${diffInSeconds} giây trước`;
        } else if (diffInSeconds < 3600) {
            const minutes = Math.floor(diffInSeconds / 60);
            return `${minutes} phút trước`;
        } else if (diffInSeconds < 86400) {
            const hours = Math.floor(diffInSeconds / 3600);
            return `${hours} giờ trước`;
        } else {
            const days = Math.floor(diffInSeconds / 86400);
            return `${days} ngày trước`;
        }
    }

    function updateRelativeTime() {
        $('.created_at').each(function () {
            const $this = $(this);
            const time = $this.data('time');
            const relativeTime = calculateRelativeTime(time);
            if (relativeTime) {
                $this.text(relativeTime);
            }
        });
    }

    $(document).on('click', '.btn-reply', function (ev) {
        ev.preventDefault();
        var id = $(this).data('id_comment');
        var form_reply = '#form-reply-' + id;

        $('.form-post-comment-child').slideUp();
        $(form_reply).slideDown();
    });
    // Xử lý dữ liệu btnsave-reply
    $(document).on('click', '.btnsave-reply', function (ev) {
        ev.preventDefault();
        var id = $(this).data('id_comment');
        var comment_reply_id = '.text-note-' + id;
        var contentReply = $(comment_reply_id).val();
        var form_reply = '#form-reply-' + id;

        $('#form-reply' + id).slideUp();

        var id_post = $(this).data('comment');

        var commentUrl = '/comment/' + id_post;

        var path_img = window.location.origin + '/storage/images/logo_webWinashoes.png';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: commentUrl,
            method: 'POST',
            data: {
                content: contentReply,
                parent_id: id,
            },

            dataType: "json",

            success: function (response) {
                if (response.error) {
                    console.error("Có lỗi xảy ra:", error);
                } else {
                    var commentDestroy = '/comment/destroy' + response.data.id;
                    var htmlComment = `
                                <div class="comment-child">
                                    <a href="" class="pull-left">
                                        <img src=" `+ path_img + `"
                                            alt="" class="avatar" width="60px">
                                    </a>

                                <div class="media-comment-body">
                                    <h4 name="fullname">` + response.data.user.fullname + ` 
                                    <small class="created_at" style="color: #5555558f" data-time="${response.data.comment.created_at}">
                                        ${calculateRelativeTime(response.data.comment.created_at)}
                                    </small>
                                    </h4>
                                    <p name="content">
                                        ` + response.data.comment.content + `
                                    </p>

                                    <div class="text-right">
                                        <a href="" class="btn-edit">Edit</a>
                                        <form action="` + commentDestroy + `" method="post" class="delete-comment">
                                            <button 
                                                type="submit" class="btn-delete-reply" data-comment_id="` + response
                            .data.comment.id + `">Delete
                                            </button>
                                        </form>
                                        <a class="btn-reply" href=""
                                            data-id_comment="` + response.data.comment.id + `">Reply
                                        </a>
                                    </div>

                                     <form action="" method="POST" style="display:none"
                                            class="formReply form-reply-` + response.data.comment.id + `">
                                        @csrf
                                        @method('POST')
                                        <texta name="content-reply" id="" cols="70" rows="6" placeholder="Enter content (*)"
                                            class="text-note-` + response.data.comment.id + `" required="required"></texta
                                        <button class="btnsave-reply" type="submit"
                                            data-id_comment="` + response.data.comment.id + `"> Send reply
                                            content</button>
                                    </form>
                                </div>
                            </div>
                        `;

                    $('.list-comment-child').prepend(htmlComment);
                    $(form_reply).slideUp();
                    $('#content-reply').val('');
                    // Cập nhật lại thời gian tương đối
                    updateRelativeTime();
                }
            },

            error: function (xhr, status, error) {
                console.error("Có lỗi xảy ra:", xhr.responseText);
            }
        });
    });

    $('#btnsave').on('click', function (event) {
        event.preventDefault();

        const content = $('#content').val();
        const product_id = $(this).data('comment');
        const path_img = window.location.origin + '/storage/images/logo_webWinashoes.png';
        const commentUrl = `/comment/${product_id}`;

        if (content.trim() === "") {
            alert("Comment content cannot be empty!");
            return;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: commentUrl,
            method: 'POST',
            data: { content: content },
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    console.error("Có lỗi xảy ra:", response.error);
                } else {
                    const commentDestroy = `/comment/delete/${response.data.comment.id}`;
                    const htmlComment = `
                        <div class="comment-parent" id="comment-parent-${response.data.comment.id}">
                            <a href="" class="pull-left">
                                <img src="${path_img}" alt="" class="avatar" width="60px">
                            </a>
                            <div class="media-comment-body">
                                <h4 name="fullname">${response.data.user.fullname}
                                    <small class="created_at" style="color: #5555558f" data-time="${response.data.comment.created_at}">
                                        ${calculateRelativeTime(response.data.comment.created_at)}
                                    </small>
                                </h4>
                                <p name="content">${response.data.comment.content}</p>
                                <div class="text-right">
                                    <a href="" class="btn-edit" data-id_comment="${response.data.comment.id}" data-content="${response.data.comment.content}">Edit</a>
                                    <form action="${commentDestroy}" method="post" class="delete-comment">
                                        <button type="submit" class="btn-delete" data-comment_id="${response.data.comment.id}">Delete</button>
                                    </form>
                                    <a class="btn-reply" href="" data-id_comment="${response.data.comment.id}">Reply</a>
                                </div>
                            </div>
                        </div>`;

                    $('.media-comment').prepend(htmlComment);
                    $('#content').val('');
                    updateRelativeTime();
                }
            },
            error: function (xhr, status, error) {
                console.error("Có lỗi xảy ra:", xhr.responseText);
                alert("Unable to add comment. Please try again!");
            }
        });
    });

    setInterval(updateRelativeTime, 60000);
    updateRelativeTime();



    $(document).on('click', '.btn-edit', function (ev) {
        ev.preventDefault();
        const id_comment = $(this).data('id_comment');
        const content = $(this).attr('data-content');
        const form_edit = '#form-edit-' + id_comment;

        $(form_edit).show();
        $(form_edit).find('#text-edit-' + id_comment).val(content);
    });

    $(document).on('click', '.btnsave-update', function (ev) {
        ev.preventDefault();
        const id_comment = $(this).data('id_comment');
        const form_edit = '#form-edit-' + id_comment;
        const content_update = $(form_edit).find('#text-edit-' + id_comment).val();

        $.ajax({
            url: '/comment/edit/' + id_comment,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                _method: 'PUT',
                content: content_update
            },
            success: function (response) {
                console.log(response);
                $(form_edit).hide();
                $('#content-' + id_comment).html(response.data.content);
                $('#btn-edit-' + id_comment).attr('data-content', response.data.content);
            },
            error: function (xhr, status, error) {
                console.error('Có lỗi xảy ra:', xhr.responseText);
            }
        });
    });

    // Sửa comment "btnsave-update" child
    $('.btn-edit-child').click(function (ev) {
        ev.preventDefault(); // Ngăn không reload lại trang
        var id_comment = $(this).data('id_comment');
        var content = $(this).attr('data-content');
        var form_reply = '#form-reply-' + id_comment;
        var form_edit = '#form-edit-' + id_comment;

        $(form_reply).slideUp();
        $(form_edit).slideDown();

        $('#form-edit-' + id_comment).show().val(content);
        $('#form-edit-' + id_comment).find('#text-edit-' + id_comment).val(content); // Gán nội dung vào textarea
    });

    // Sửa comment cho các comment con
    $('.btnsave-update').click(function (ev) {
        ev.preventDefault(); // Ngăn không reload lại trang
        var id_comment = $(this).data('id_comment');
        var form_edit = '#form-edit-' + id_comment;
        var content_update = $(form_edit).find('#text-edit-' + id_comment).val(); // Lấy nội dung từ textarea

        $('#content' + id_comment).text(content_update);
        $.ajax({
            url: '/comment/edit/' + id_comment,
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                _method: 'PUT',
                id_comment: id_comment,
                content: content_update
            },
            success: function (response) {
                console.log(response.data);
                $(form_edit).hide();
                $('#content-' + id_comment).html(response.data.content);
                content_updated = response.data.content;
                $('#btn-edit-child-' + id_comment).attr('data-content', content_updated);
                $('#form-edit-' + id_comment).find('#text-edit-' + id_comment).val(content_updated).show();
            },
            error: function (xhr, status, error) {
                console.error('Có lỗi xảy ra: ' + error);
            }
        });
    });

    // Xóa comment cha
    $(document).on('click', '.btn-delete', function (ev) {
        ev.preventDefault();
        var comment_id = $(this).data('comment_id');

        if (confirm('Do you want to delete?')) {
            $.ajax({
                url: '/comment/delete/' + comment_id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('#comment-parent-' + comment_id).fadeOut(300, function () {
                        $(this).remove(); // Sau khi ẩn dần thì xóa comment khỏi DOM
                    });
                    // alert(response.message); // Hiển thị thông báo sau khi xóa thành công
                },
                error: function (xhr) {
                    alert('Something went wrong!');
                }
            });
        }
    });

    // Xóa comment con
    $(document).on('click', '.btn-delete-reply', function (ev) {
        ev.preventDefault();
        var comment_id = $(this).data('comment_id');
        var parent_id = $(this).data('parent_id');

        if (confirm('Bạn có chắc chắn muốn xóa bình luận này không?')) {
            $.ajax({
                url: '/comment/delete/' + comment_id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    $('.comment-child-' + comment_id).fadeOut(300, function () {
                        $(this).remove(); // Sau khi ẩn dần thì xóa comment khỏi DOM
                    });
                },
                error: function (xhr) {
                    alert('Something went wrong!');
                }
            });
        }
    });
});