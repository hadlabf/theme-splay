</div>
<footer>
    <!-- Data needed:
    - Footer section
        - *Section title 
        - Description 
        - *Links (repeator)
            - Link URL (href/url)
            - Link label 
    - Address
        - *Street
        - *Postal code
        - *City
        - *Country
    -->
    <div class="container">
        <div class="row">

            <div class="col-md">
                <!-- TODO: 
                - Add data for 3 rows (Follow us, Create with us, Work with us)
                - Loop optional footer sections
                -->
                <div class="row">
                    <div class="col-md">
                        <!-- TODO: Required section title -->
                        <p class="font-weight-bold">Section title</p>
                    </div>
                    <div class="col-md">
                        <!-- TODO: Optional description -->
                        Optional description
                        <p></p>
                        <!-- TODO: Required loop links of social media (fields: link, label)-->
                        <a href="">Link</a>
                    </div>
                </div>

                <div class="row">
                    <a href="">Privacy policy</a>
                </div>
                <div class="row">
                    <p>We are appart of <a target="_blank" href="https://caybon.com/">Caybon</a><p>
                </div>
            </div>
            
            <div class="col-md">
                <!-- TODO: Loop addresses -->
                <p class="mb-0">Address</p>
                <p class="mb-0">Postal code, city</p>
                <p class="mb-0">Country</p>
            </div>

        </div>
    </div>
</footer>
<!-- Bootstrap scripts -->
<?php
    wp_footer('splay_register_scripts')
?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>