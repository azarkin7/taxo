<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-8">
    <form class="form-horizontal order">
<div class="form-group">
  <label for="from">Адрес отправления</label>
  <input type="text" name="from" value="" class="form-control from" placeholder="Например: улица Чкалова 17">
</div>
<div class="form-group">
  <label for="from">На какое время</label>
  <select class="form-control">
    <?php
      for($now=date('G')+1;$now<=date('G')+4;$now++){
        echo "<option value='{$now}'>$now</option>";
     }
     ?>
  </select> <span>:</span>
  <select class="form-control">
    <?php
      for($nowm=0;$nowm<=59;$nowm++){
        if($nowm<10){
          echo "<option value='0{$nowm}'>0".$nowm."</option>";
        }else{
          echo "<option value='{$nowm}'>".$nowm."</option>";
        }
     }
     ?>
  </select>
  <label class="checkbox-inline">
    <input type="checkbox" id="nowtime" value="option1"> <span class="now">Сейчас</span>
  </label>

</div>
<div class="form-group">
  <label for="to">Адрес прибытия</label>
  <input type="text" name="to" value="" class="form-control to" placeholder="Например: проулок Старовка 15">
</div>

<button type="button" name="button" class="priceorder">Узнать цену</button>
</form>
<div id="map" style="width: 600px; height: 400px"></div>
  </div>
</div>
