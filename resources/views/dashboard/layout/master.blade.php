<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PPDB WIKRAMA</title>
    <link rel="stylesheet" href="{{ asset('asset') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/splide/splide.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    @include('dashboard.layout.navbar')
    @yield('dahboard.tamu')
    @include('dashboard.layout.footer')



    <script src="https://kit.fontawesome.com/63b23d6412.js" crossorigin="anonymous"></script>

    <script src="{{ asset('asset') }}/js/splide/splide.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('asset') }}/js/particles/particles.js"></script>
    <script src="{{ asset('asset') }}/js/particles/app.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('nav').removeClass('transparent');
            } else {
                $('nav').addClass('transparent');
            }
        });
    </script>
    <script>
        console.log($(window).width())
        if ($(window).width() > 1024) {
            i = 3;
        } else {
            i = 1;
        }
        var splide = new Splide('.splide', {
            type: 'loop',
            drag: 'free',
            perPage: i,
        });
        splide.mount();
    </script>
    <script>
        $(document).ready(function() {
            $('#asal_sekolah').select2({
                style: false
            });
        });
    </script>
    <script>
            $('#asal_sekolah').on('change', function() {
                if (this.value == "lainnya") {
                    $('.nama_sekolah').removeClass('d-none');
                    $('#nama_sekolah_input').val('');
                } else {
                    $('.nama_sekolah').addClass('d-none');
                    $('#nama_sekolah_input').val(this.value);
                }
            });
    </script>
    @if(Session::has('success-register'))
    <script>
        Swal.fire({
            title: 'Success',
            text: 'Berhasil Registrasi Akun',
            icon: 'success',
        })
    </script>
    @endif
</body>

</html>
