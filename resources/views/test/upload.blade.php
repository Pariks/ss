
<form action="/upload" method="post" enctype="multipart/form-data">
        Select image to upload:
    <input type="file" name="avatar"  >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Upload" name="submit">
</form>