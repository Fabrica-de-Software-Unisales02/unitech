<footer class="" id="contato">
    <section class="container d-flex flex-sm-row justify-content-around text-light py-4" id="sobre">
        <div class="">
            <ul class="nav">
                <li><a href="#" target="_white">@Unitech-lab</a></li>
                <li>Endereço: Av Vitória, 950, Forte São João -
                    Vitória/ES CEP: 29017-950</li>
                <li>Telefone: 27 3331-8500</li>
            </ul>
        </div>
    </section>
</footer>
</body>
<script src='{{ url(mix("js/app.js")) }}'></script>
@if($pagina)
    <script src='{{ url(mix("js/$pagina.js")) }}'></script>
@endif

</html>
