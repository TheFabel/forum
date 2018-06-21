$(".comment_add").on("submit", function(e)
{
    e.preventDefault();
    theme_id = $("#theme_id").val();
    comment = $("#comment").val();
    _token = $('meta[name="csrf-token"]').attr('content');

    var xhr = new XMLHttpRequest();
    xhr.open('post', '/add?comment='+comment+'&_token='+_token+'&theme_id='+theme_id, true);
    xhr.onload = function()
    {
        if(this.responseText === "OK")
        {
            location.reload();
        }
    };
    xhr.send();
})
