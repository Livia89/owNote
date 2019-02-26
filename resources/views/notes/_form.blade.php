<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name='title' required="required" value='{{isset($note) ? $note->title : ""}}'> 
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name='content' class="form-control" id="content" required="required" >{{isset($note) ? $note->content : ""}}</textarea>
  </div>
  <div class="form-group">
    <label for="notificationDate">Notification Date</label>
    <input type="date" name='dateNotification' required="required" class="form-control" id="notificationDate" value='{{isset($note) ? $note->dateNotification : ""}}'>
  </div>
  <div class="form-group">
    <label for="notificationDate">Notification Hour</label>
    <input type="time" name='hourNotification' required="required" class="form-control" id="notificationHour" value='{{isset($note) ? $note->hourNotification : ""}}'>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
