<div class="card">
    <div class="card-body">

        <form action="POST">
            <div class="row form-group">
                <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                <div class="col-sm-10">
                    <input type="number" name="id" class="form-control" placeholder="Please input id" value="<?php if(isset($data["id"])) echo $data["id"];?>" required = "true">
                </div>
            </div>
            <div class="row form-group">
                <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Please input name" value="<?php if(isset($data["category"])) echo mysqli_fetch_assoc($data["category"])["category_name"]?>" required = "true">
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <input type="submit" value="Save changes" class="btn btn-primary">
            </div>
        </form>

    </div>
</div>
