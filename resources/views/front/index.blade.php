<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Inline form</h2>
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  <form class="form-inline" action="{{ url('/') }}/saverecord" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Description:</label>
      <textarea type="email" class="form-control" id="name" name="name"></textarea>
    </div>

    <div class="form-group">
      <label for="email">date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter email" name="date">
    </div>
    <div class="form-group">
      <label for="pwd">time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter password" name="time">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>