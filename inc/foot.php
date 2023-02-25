     <!-- footer -->
    <footer class="py-15 py-xl-20 bg-black inverted">
        <div class="container">
            <div class="row g-2 g-lg-6 mb-8">
                <div class="col-lg-6">
                    <h4><?= ucwords($address) . ', ' . ucwords($city); ?><br><?= ucwords($country); ?></h4>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <span class="h5">+1 (234) 567 890</span>
                </div>
            </div>
            <div class="row mb-8">
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="row g-0 g-lg-6 text-secondary">
                <div class="col-lg-4 text-lg-end order-lg-2 mb-2">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="" class="text-reset">facebook</a></li>
                        <li class="list-inline-item ms-1"><a href="" class="text-reset">twitter</a></li>
                        <li class="list-inline-item ms-1"><a href="" class="text-reset">linkedin</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-lg-end order-lg-2 mb-2">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?= PROOT; ?>become-a-speaker" class="text-reset">Be a SPEAKER</a></li>
                        <li class="list-inline-item ms-1"><a href="<?= PROOT; ?>become-a-sponsor" class="text-reset">Be our SPONSOR</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 mb-2">
                    <p>Copyrights &copy; <script>document.write(new Date().getFullYear())</script></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor.bundle.js"></script>
    <script src="assets/js/index.bundle.js"></script>

    <script>
        // SUBSCRIBE TO NEW PRODUCTS
        function subscribe_products() {
            var email = $('#subscribe').val();

            if (email == '') {
                alert('Enter email to subscribe');
                return false;
            } else if (!isEmail(email)) {
                alert('Please enter a valid email.');
                return false;
            } else {
                $.ajax({
                    url : './control/subscriber.php',
                    method : 'POST',
                    data : {email : email},
                    success : function(data) {
                        alert(data);
                        location.reload();
                    },
                    error : function() {
                        alert('Something went wrong.');
                    }
                });
            }

        }

        function isEmail(email) { 
            return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
        }
</script>

</body>
</html>