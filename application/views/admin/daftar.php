<style>
    body {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;

        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        z-index: 1;
    }

    body::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.65);
    }
</style>


<body style="background-image: url('<?= base_url('img/gambar.png'); ?>');">
    <div class="container mt-5">
        <section>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <h2 style="letter-spacing: 2px;">DAFTAR</h2>
                        </div>
                        <form action="" method="post">
                            <div class="card-body">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan Username" aria-describedby="basic-addon3">
                                </div>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Password" aria-describedby="basic-addon3">
                                </div>
                                <div class="row mb-3 pt-3">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-danger" name="daftar"><i class="bi bi-person-plus-fill"></i> Daftar</button>
                                        <a href="<?= base_url(); ?>admin" type="submit" class="btn btn-primary btn-login"><i class="fa fa-reply" aria-hidden="true"></i> Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>