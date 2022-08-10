
<?php $_POST= 'name' ;?>
<div class="from">
    <h2>Thông tin</h2>
    <div class="card" style="width: 500px;">
        <div class="container">
            <div class="row">

                <form action="" method="post" enctype="multipart/form-data">


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label>merchant_site_code</label>
                        <input type="text" name="merchant_site_code" class="form-control"  placeholder="Nhập merchant_site_code... ">
                    </div>
                    <div class="form-group">
                        <label>order_code</label>
                        <input type="text" name="order_code" class="form-control"   placeholder="Nhập order_code...">

                    </div>
                    <div class="form-group">
                        <label>order_description</label>
                        <input type="text" name="order_description" class="form-control"  placeholder="Nhập order_description...">
                    </div>
                    <div class="form-group">
                        <label>amount</label>
                        <input type="number" name="amount" class="form-control" placeholder="Nhập amount...">
                    </div>
                    <div class="form-group">
                        <label>currency</label>
                        <input type="text" name="currency" class="form-control" placeholder="Nhập currency...">
                    </div>
                    <div class="form-group">
                        <label>buyer_fullname</label>
                        <input type="text" name="buyer_fullname" class="form-control" placeholder="Nhập buyer_fullname...">
                    </div>
                    <div class="form-group">
                        <label>buyer_email</label>
                        <input type="email" name="buyer_email" class="form-control" placeholder="Nhập buyer_email...">
                    </div>
                    <div class="form-group">
                        <label>buyer_mobile</label>
                        <input type="text" name="buyer_mobile" class="form-control" placeholder="Nhập buyer_mobile...">
                    </div>
                    <div class="form-group">
                        <label>return_url</label>
                        <input type="text" name="return_url" class="form-control" placeholder="Nhập return_url...">
                    </div>
                    <div class="form-group">
                        <label>cancel_url</label>
                        <input type="text" name="cancel_url" class="form-control" placeholder="Nhập cancel_url...">
                    </div>
                    <div class="form-group">
                        <label>notify_url</label>
                        <input type="text" name="notify_url" class="form-control" placeholder="Nhập notify_url...">
                    </div>
                    <div class="form-group">
                        <label>language</label>
                        <input type="text" name="language" class="form-control" placeholder="Nhập language...">
                    </div>
                    <div class="form-group">
                        <label>version</label>
                        <input type="text" name="version" class="form-control" placeholder="Nhập version...">
                    </div>
                    <button type="submit"  class="btn btn-primary">Thanh toán</button>

                </form>

                ?>
                <?php
                var_dump($_POST);die;
                ?>
            </div>
        </div>
    </div>
</div>


