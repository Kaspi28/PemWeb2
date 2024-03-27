<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Menghitung Panjang dan Lebar Persegi Panjang</h1>
<form>
  <div class="form-group row">
    <label for="panjang" class="col-4 col-form-label">Panjang</label> 
    <div class="col-8">
      <input id="pjg" name="pjg" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lebar" class="col-4 col-form-label">Lebar</label> 
    <div class="col-8">
      <input id="lbr" name="lbr" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> -->

<?php
class persegipanjang{
  var $panjang;
  var $lebar;

  function __construct($panjang, $lebar){
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }
}

?>