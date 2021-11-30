<div class="col-12">
    <div id="footer-content">
        <ul class="footer-links">
            <li><a href="me">Início</a></li>
            <li><a href="">Termos de Uso</a></li>
            <li><a href="">Contato</a></li>
            {{-- @if(session()->get('rank')  [6, 7, 8, 9])
                <li><a href="/admin"><font color="red">Administração</font></a></li>
            @endif --}}
        </ul>

        <p>Copyright &copy; {{ $hotel_name }}. Todos os Direitos Reservados.<br />Esse site não possui afiliação alguma com Sulake Corporation Oy.<br />dCMS desenvolvido por<b> vvalle</b> e <b>Design</b> por <b>Sonay</b></p>
    </div>
</div>
</div>
</div>
</body>
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    function changeMotto() {
        const fd = new FormData()
        fd.append('motto', $('#motto').val())
        axios.post('/change-motto', fd).then(response => {}).catch(e => {console.log(e)})
    }
</script>
</html>