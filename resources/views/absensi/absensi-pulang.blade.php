<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminLTE 3 | Starter</title>
    @include('template.head')
    <link rel="stylesheet" href="{{ asset('css/jam-analog.css') }}">
    <script src="{{ asset('js/jam.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Absensi pulang</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        Jam Kantor
                    </div>
                    <form action="{{ route('simpan-absensi-pulang') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="jam_analog_pulang" onload="setdate()">
                                <div class="xxx">
                                    <div class="jarum jarum_detik"></div>
                                    <div class="jarum jarum_menit"></div>
                                    <div class="jarum jarum_jam"></div>
                                    <div class="lingkaran_tengah"></div>
                                </div>
                            </div>
                            <script>
                                const secondHand = document.querySelector('.jarum_detik');
                                const minuteHand = document.querySelector('.jarum_menit');
                                const jarum_jam = document.querySelector('.jarum_jam');

                                function setDate() {
                                    const now = new Date();

                                    const seconds = now.getSeconds();
                                    const secondsDegrees = ((seconds / 60) * 360) + 90;
                                    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
                                    if (secondsDegrees === 90) {
                                        secondHand.style.transition = 'none';
                                    } else if (secondsDegrees >= 91) {
                                        secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
                                    }

                                    const minutes = now.getMinutes();
                                    const minutesDegrees = ((minutes / 60) * 360) + 90;
                                    minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

                                    const hours = now.getHours();
                                    const hoursDegrees = ((hours / 12) * 360) + 90;
                                    jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
                                }
                                setInterval(setDate, 1000)

                            </script>
                            <center>
                                <p style="font-size: 40px; font-family: arial;" id="jam"></p>
                                <div class="form-group">
                                    <button class="btn btn-danger" type="submit">Absen Pulang</button>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('template.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('template.script')
</body>

</html>
