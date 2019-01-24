<h1>ADD MORE COURSE </h1>

<!-- Default form login -->
<form class="text-center border border-light p-5" method="post" action="/edu">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input name ='c'  type='text' id="defaultLoginFormEmail" class="form-control mb-4" placeholder="COURSE NUMBER">

    <!-- Password -->
    <input name = 't' type='text' id="defaultLoginFormPassword" class="form-control mb-4" placeholder="COURSE TITILE">



    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>


</form>
