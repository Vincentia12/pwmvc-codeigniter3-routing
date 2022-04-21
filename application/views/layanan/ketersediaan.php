<style>
    .card {
        border: none;
        border-radius: 10px
    }

    .c-details span {
        font-weight: 300;
        font-size: 13px
    }

    .btn {
        background-color: white;
        border-color: black;
    }

    .btn:hover {
        background-color: #fed85d;
        border-color: #fed85d;
    }

    .icon {
        width: 50px;
        height: 50px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 39px
    }

    .badge span {
        background-color: #fffbec;
        width: 60px;
        height: 25px;
        padding-bottom: 3px;
        border-radius: 5px;
        display: flex;
        color: #fed85d;
        justify-content: center;
        align-items: center
    }

    .progress {
        height: 10px;
        border-radius: 10px
    }

    .progress div {
        background-color: red
    }

    .text1 {
        font-size: 14px;
        font-weight: 600
    }

    .text2 {
        color: #a5aec0
    }

    h3 {
        font-weight: 500;
    }
</style>

<body style="background-color: #DADBBD;">
    <section>
        <div class="container">
            <br>
            <h2 class="text-center fw-bold">Informasi Ketersediaan Tempat Tidur</h2>
            <hr>
            <br>
            <br>
            <a href="<?= base_url(); ?>" type="button" class="btn rounded-pill mb-3"> Kembali</a>

            <div class="container mt-2 mb-3">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card shadow p-3 mb-4">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="fa fa-bed" aria-hidden="true"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Rumah Sakit Sumber Kasih</h6> <span>Last Update 4 April 2022 14.32</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Information</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading fw-bold">Ruangan<br>Kelas 2 Anggrek</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">3 Bed Tersedia <span class="text2">dari kapasitas 4 Bed</span></span> </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow p-3 mb-4">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="fa fa-bed" aria-hidden="true"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Rumah Sakit Sumber Kasih</h6> <span>Last Update 4 April 2022 14.32</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Information</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading fw-bold">Ruangan<br>Kelas 2 Bougenville</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">2 Bed Tersedia <span class="text2">dari kapasitas 4 Bed</span></span> </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow p-3 mb-4">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="icon"> <i class="fa fa-bed" aria-hidden="true"></i> </div>
                                    <div class="ms-2 c-details">
                                        <h6 class="mb-0">Rumah Sakit Sumber Kasih</h6> <span>Last Update 4 April 2022 14.32</span>
                                    </div>
                                </div>
                                <div class="badge"> <span>Information</span> </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="heading fw-bold">Ruangan<br>Kelas 3 Anggrek</h3>
                                <div class="mt-5">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mt-3"> <span class="text1">7 Bed Tersedia <span class="text2">dari kapasitas 10 Bed</span></span> </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>