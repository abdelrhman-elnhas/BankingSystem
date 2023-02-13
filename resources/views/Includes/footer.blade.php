        <!-- Bootstrap -->
        <script src="{{asset('js')}}/bootstrap.min.js"></script>
        <!-- Font Awesome -->
        <script src="{{asset('js')}}/all.min.js"></script>
        <!-- Script File -->
        <script src="{{asset('js')}}/index.js"></script>
        <script>
            let m = document.getElementById('liveToast');
            let toast = bootstrap.Toast.getOrCreateInstance(m);
            toast.show();
            mclosed.addEventListener("click" , (e) =>{
                toast.hide();
            });
        </script>
    </body>

</html>
