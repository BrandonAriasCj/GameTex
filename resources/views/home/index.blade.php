    @extends('layouts.layout')

    @section('contenido')

    @vite('resources/css/app.css')
    <main>
        <section>
            <div>
                <h2>EL ECOSISTEMA PARA LOS GAMERS</h2>
                <p>"¡Únete a la batalla y demuestra tu habilidad en nuestros emocionantes torneos de videojuegos! Donde los mejores gamers se enfrentan por la gloria y grandes premios."</p>
            </div>
        </section>
        <x-seccion>
        <h2>EVENTOS</h2>
            <div style="display:flex;">
                <div>
                    <a href="#"><img width="100px" src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2117/bd406f42e9352fdb398efcf21a4ffe575b2306ac40089d21.png"></a>
                    <a href="#">Participar</a>
                </div>
                <div>
                    <a href="#"><img width="100px" src="https://store.akamai.steamstatic.com/public/images/gift/steamcards_physical.png"></a>
                    <a href="#">Participar</a>
                </div>
                <div>
                    <a href="#"><img width="100px" src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2216/cbb03393f0ab1149f2b89a8194ce19e596a24fa5bec6526a.png"></a>
                    <a href="#">Participar</a>
                </div>
            </div>
        </x-seccion>
 
        <x-seccion>
        <h2>TORNEOS</h2>
            <div style="display:flex">
                <div>
                    <div>
                        <img width="200px" src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/550/capsule_616x353.jpg?t=1729702523">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://i.3djuegos.com/juegos/19026/counterstrike_2/fotos/ficha/counterstrike_2-5835305.webp">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://cdn1.epicgames.com/offer/24b9b5e323bc40eea252a10cdd3b2f10/EGS_LeagueofLegends_RiotGames_S2_1200x1600-905a96cea329205358868f5871393042">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://image.api.playstation.com/vulcan/ap/rnd/202312/0123/978efa66c9645e4692ac7036a31aa002a49d0efb4b88b45c.png">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdSb-TKKNAAHlD_K3QJ4qFHqKRFIxNN6EqaLeHvSjecvpYo2ETpJ6yd7NDgwXmIhPlBvM&usqp=CAU">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://supercell.com/images/e93a34598d3723641a72eb9ce02691f6/790/games_thumbnail_brawlstars.5cd76330.webp">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://yt3.googleusercontent.com/ytc/AIdro_m0DtuBhZUI1Mie9JUspzzqediBM76hO49vWA8hM5hwu9s=s900-c-k-c0x00ffffff-no-rj">
                    </div>
                </div>
                <div>
                    <div>
                        <img width="200px" src="https://image.api.playstation.com/cdn/UP0700/CUSA09072_00/2eBPISxxvTv5foYSDlqiBJfmRj5LZxv3.png">
                    </div>
                </div>
            </div>
        </x-seccion>
        <x-seccion>
            <h2>JUGADORES DE LA SEMANA</h2>
            <div>
                <div>
                    <img widht="100px" height="100px" src="https://i.pinimg.com/originals/22/b9/39/22b939e9dbefd23f513f189de558da24.gif">
                </div>
                <div>
                    <h3>CHICHARRON</h3>
                    <p>510 XP obtenidos 10/23 - 09/24</p>
                    <div>
                        <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png">
                        <p>+10 ganados</p>
                    </div>
                    <a href="#">Ver Perfil</a>
                </div>
            </div>
            <div>
                <div>
                    <img widht="100px" height="100px" src="https://media.tenor.com/xhC6NZETIzMAAAAM/simon-ghost-riley.gif">
                </div>
                <div>
                    <h3>TIREN PARO</h3>
                    <p>910 XP obtenidos 09/23 - 09/24</p>
                    <div>
                        <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png">
                        <p>+10 ganados</p>
                    </div>
                    <a href="#">Ver Perfil</a>
                </div>
            </div>
            <div>
                <div>
                    <img widht="100px" height="100px" src="https://i.pinimg.com/originals/8b/a4/8d/8ba48db13ca10021f9d14aa91a0d8cb1.gif">
                </div>
                <div>
                    <h3>SINAY</h3>
                    <p>750 XP obtenidos 12/23 - 09/24</p>
                    <div>
                        <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png">
                        <p>+20 ganados</p>
                    </div>
                    <a href="#">Ver Perfil</a>
                </div>
            </div>
        </x-seccion>
        <x-seccion>
            <h2>NOTICIAS RECIENTES</h2>
            <article>
                <h3>The international 2024 cuenta con representación peruana</h3>
                <p>5 de Setiembre</p>
                <p>Dos equipos peruanos: HEROIC y BEAST COAST forman del torneo más prestigiosos de Dota 2...</p>
                <a href="#"><img width="200px" src="https://esportsbureau.com/wp-content/uploads/2024/09/The-international-2024-600x367.jpg"></a>
                <a href="#">Leer más</a>
            </article>
            <article>
                <h3>¡El mundial de Esports 2024 rompe récords de audiencia!</h3>
                <p>25 de Julio</p>
                <a href="#"><img width="200px" src="https://static.gosugamers.net/a0/e0/6b/eff5c8efe5d4d81770dc85ae3914faea3593cbf73f18b19382f8777686.webp?w=1600"></a>
            </article>
            <article>
                <h3>Infinity: el equipo 'gamer' peruano que despega y ya compite en torneos de América Latina</h3>
                <p>25 de Agosto</p>
                <a href="#"><img width="200px" src="https://gestion.pe/resizer/v2/CBAKO4CASBH5NPTP5ELB4IZZAM.jpg?auth=88ab9f2d915c5ac66225d0e69e2b2332fb6f89bcf7e3b1a28cb38cdf9b794bd2&width=1200&height=675&quality=75&smart=true"></a>
            </article>
            <article>
                <h3>GTA VI: Los detalles del videojuego que superaría los US$ 1,000 mlls. en inversión</h3>
                <p>31 de Agosto</p>
                <p>Pese a que Rockstar no ha proporcionado fechas específicas de lanzamiento ...</p>
                <a href="#"><img width="200px" src="https://gestion.pe/resizer/v2/QMVAHCKXFNGM3MZFPMXCZHVTEI.jpg?auth=6259b894995b1a16c13c4734421227cf3912c51b25aaaf1783506063eb1de7cd&width=1200&height=900&quality=75&smart=true"></a>
                <a href="#">Leer más</a>
                <article>
        </x-seccion>
    </main>
    @endsection