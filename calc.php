<? include_once "inc/calc.php"; ?>

<center>
	<h1>Калькулятор</h1>
</center>
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2">
        <? if ($err): ?>
            <p class="bg-danger text-center" >
                <?=$err?>
            </p>
        <? elseif (isset($_POST['sub'])): ?>
            <p class="bg-success text-center" >
                Результати обрахунку: <br>
                <b><?=$_POST['x1']?>  <?=$_POST['operation']?> <?=$_POST['x2']?> = <?=$res?></b>
            </p>
        <? endif; ?>

        <form method="POST" role="form">
            <div class="form-group">
                <input type="text" name="x1" class="form-control" required value="<?=$_POST['x1']?>">
            </div>
            <div class="form-group col-md-6 pull-right">
                <select name="operation" class="form-control">
                    <? foreach ($operations as $operation): ?>
                        <option <?=($_POST['operation'] === $operation)?"selected":""; ?> value="<?=$operation?>"><?=$operation?></option>
                    <? endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="x2" class="form-control" required value="<?=$_POST['x2']?>">
            </div>
            <input type="submit" value="Посчитать" name="sub" class="btn btn-primary pull-right">
        </form>
    </div>
    <div class="col-md-5"></div>
</div>