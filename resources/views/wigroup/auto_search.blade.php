<!-- http://www.wigroup.test -->

<div class="p-6">
    <input type="text" id="url_input" class="full-width" name="url_input" placeholder="Enter URL">
</div>

<div class="p-6 text-center">
    <button id="load_url" class="btn btn-default">Load URL</button>
</div>

<div class="p-6">
    <div class="col-md-12">
        <div class="row">
            <iframe id="url_iframe" src="" title="" width="800" height="600"></iframe>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#url_iframe').attr('src', window.location.origin);
    });

    $(document).off('click', '#load_url');
    $(document).on('click', '#load_url', function() {
        var src = $('#url_input').val();
        $('#url_iframe').attr('src', src);
    });
</script>
