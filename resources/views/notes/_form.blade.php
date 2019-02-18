
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name='title' required="required" value='{{($note) ? $note->title : ""}}'> 
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name='content' class="form-control" id="content" required="required" >{{($note) ? $note->content : ""}}</textarea>
  </div>
  <div class="form-group">
    <label for="notificationDate">Notification Date</label>
    <input type="date" name='dateNotification' required="required" class="form-control" id="notificationDate" value='{{($note) ? $note->dateNotification : ""}}'>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
