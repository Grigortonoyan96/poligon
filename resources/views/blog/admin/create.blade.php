<table>
<form method="Post" action="{{ route('blog.admin.categories.store') }}">
    @csrf
   <label>title</label>
<input type="text" name="title">
    <br><br>
    <label> category_id </label>
<input type="text" name="category_id">
    <br><br>
    <label>user_id</label>
    <input type="text" name="user_id" value="1">
    <br><br>
    <label>content_raw</label>
    <input type="text" name="content_raw" value="base">
    <br><br>
    <label>content_html</label>
    <input type="text" name="content_html" value="base">
    <br><br>
<input type="submit" value="Add">
</form>
</table>

