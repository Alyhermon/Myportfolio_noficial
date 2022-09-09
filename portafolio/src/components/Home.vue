<template>
    <div class="Container">

        <!--Este es el campo del Header-->
        <div class="header">

            <!--Este es el navegador-->
            <div class="menu">
                <img src="../assets/Recurso 2.png" alt="Logo">
                <ul>                
                <a href="#"><li v-for="tareas in tasks">
                {{tareas.task}}</li></a>
            </ul>
            </div>

            <!--Este es la imagen de portada-->
            <div class="img"></div>
            <div class="grayBox"></div>
            <div class="clearfix"></div>

            <!--Aqui va el cuadro de bienvenida-->
            <div class="bienvenida">
                <h1>Bienvenido/as a mi mundo</h1>
                <h3>Designer UI/UX And Frontend Developer</h3>

            </div>
        </div>
        <!--Vamos a crear la seccion 'Sobre mi'-->

        <div class="SobreMi">

            <h1>Sobre mi</h1>
            <hr>
            <div class="parrafo">
                <p>Soy una joven decidida y activa, orientada a resultados, estoy dispuesta y al mismo tiempo muy motivada de empezar y formar parte de un equipo de trabajo, contando con total disposición de aprender cada día más y al mismo tiempo dar todo de mi para lograr los mejores resultados.</p>

            </div>
        </div>

        <!--Vamos a crear la seccion Proyectos-->

        <div class="proyectos">
            <h1>Proyectos</h1>
            <hr>
            <div class="caja1"></div>
            <div class="caja2"></div>
            <div class="caja3"></div>

        </div>

        <!--Habilidades-->
        <div class="habilidades">

            <div class="HabilidadesProfe">

                <h1 id="Profesionales">Habilidades Profesionales</h1>

            </div>
            <div class="HabilidaesPerso">

                <h1>Habilidades Personales</h1>

            </div>

        </div>

        <div class="contactos">
            <h1>Contactarme</h1>
            <br>
            <br>
            <hr>

            <!--Contactanos-->

            <div class="contactarme">

                <div class="menu">
                    <ul>
                        <li>Gmail: <a href="#">Alycastro1127@gmail.com</a></li>
                        <li>Gmail: <a href="#">Alinahermon2@gmail.com</a></li>
                        <li>Celular: 829-632-0937</li>
                    </ul>
                </div>

                <!--<a href="#" id="Email">Alycastro@gmail.com</a>
                <a href="#" id="Email2">Alinahermon2@gmail.com</a>
                <img src="../assets/llamada-telefonica (1).png" alt="Telefono" id="telefono"> <li>829-632-0937</li>
                <img src="../assets/linkedin.png" alt="Linkendin" id="linkedin"> <a href="#" id="linkedinA"> Alina Marina Hermon Castro </a></a>
                <img src="../assets/github.png" alt="Github" id="github"> <a href="#" id="githubA">Alyhermon</a>
                <img src="../assets/behance.png" alt="Behabce" id="behance"> <a href="#" id="behanceA">Alycastro</a>-->


            <div class="cajaP">
                <form action="">
                <input type="text" name="" v-model="contacts.Nombre" placeholder="Escriba su nombre" required="true">
                <input type="text" name="" id="segundo" placeholder="Escriba su correo">
                <input type="text" name="" id="tercero" placeholder="Escriba un mensaje">
                <input type="submit" v-on:click="Saludar(contacts.Nombre)"  value="Enviar">
            </form>

            </div>
        </div>

        </div>

        <div class="copyright">
            <h3>2022 &COPY; Alina Marina Hermón Castro -Todos los derechos reservados</h3>
        </div>
    </div>


</template>

<script>
    export default{
        data(){
            return{

                contacts:{
                    Nombre: ''
                },
                tasks:[
                    {task:'Inicio'},
                    {task:'Sobre mi'},
                    {task:'Proyectos'},
                    {task: 'Habilidades'},
                    {task: 'Contactos'}

                ]
            }
        }, 
        methods:{
            Saludar(Nombre){
                alert("Gracias " + Nombre + " Su mensaje ha sido enviado exitosamente")
            }

        }

    }

</script>

<style media="screen">

    .header .menu img{
        padding-top: 9px;
        padding-left: 30px;
        position: absolute;
        height: 120px;
        width: 190px;
    }
    .header .menu{
        background-color: #BA7B7C;
        height: 90px;
        width: 100%;
    }

    ul{
        padding-top: 32px;
        margin-left: 900px;
        list-style: none;
    }

    .menu ul li {
        color: white;
        font-size: 20px;
        display: block;
        padding-left: 20px;
        float: left;
    }

    ul li a {
        text-align: none;
    }

    .img {
        display: block;
        background: rgba(0,0, 0, 0.6) url('../assets/CodeImg.png') no-repeat;
        background-size: cover;
        background-blend-mode: darken;
        height: 698.5px;
        width: 70%;
        float: left;
    }

    .grayBox{
        display: block;
        background-color: gray;
        height: 698.5px;
        width:30%;
        float: left;

    }

    .clearfix{
        float: none;
        clear:both
    }

    .bienvenida{
        position: absolute;
        top: 638px;
        left: 20px;
        height: 120px;
        width: 47%;
        border: white solid 5px;
    }
    
    .bienvenida h1{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        padding-left: 20%;
        padding-top: 15px;
        font-size: 35px;
        color: white;
    }

    .bienvenida h3{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        color: gray;     
        padding-top: 10px;
        padding-left: 23%;
    }

    /**Sobre mi */


    .SobreMi{
        padding-top: 40px;
        text-align: justify;
        padding-right: 400px;
    }

    .SobreMi h1{
        margin-left: 700px;
    }

    .SobreMi hr{
        margin-left: 700px;
        background-color: blue;
        border-bottom: blue solid 3px;
        width: 30px;
    }

    .SobreMi p {
        padding-left: 400px;
        padding-top: 30px;
        height: 150px;
    }

    /**Seccion Proyectos */


    .proyectos{
        background-color: black;
        height: 450px;
        padding-top:50px;
    }

    .proyectos h1{
        margin-left: 700px;
        color: white;
    }

    .proyectos hr{
        background-color: blue;
        border-bottom: blue solid 3px;
        margin-left: 700px;
        width: 40px;
        margin-bottom: 20px;
    }
    
    .proyectos > .caja1{
        display: block;
        color: blue;
        background-color: rgb(153, 60, 60);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left: 4%;
        float: left;
    }

    .proyectos > .caja2{
        display: block;
        color: blue;
        background-color: rgb(152, 104, 104);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left:1%;
        float: left;

    }

    .proyectos > .caja3{
        display: block;
        color: blue;
        background-color: rgb(255, 255, 255);
        padding-top: 10px;
        width: 30%;
        height: 300px;
        margin-top: 30px;
        margin-left:1%;
        float:left;

    }

    /**Habilidades */

    .habilidades{
        background-color: rgb(255, 255, 255);
        height: 800px;
    }

    .habilidades .HabilidadesProfe{
        background: #a4b6d0;
        height: 400px;
    }

    .habilidades h1{
        padding-top: 20px;
        border: none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: gray;
        padding-left: 37%;
    }

    .habilidades #Profesionales{
        padding-left: 35.6%;
    }

    /*Seccion Contactos */

    .contactos{
        background-color: #1C3A63;
        height: 650px;
        padding-top: 60px;
    }

    
    .contactos h1{
        position: absolute;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: -30px;
        font-size: 50px;
        color: white;
        padding-left: 40%;
    }

    .contactos hr{

        position: absolute;
        left: 38%;
        background-color: white;
        height: 8px;
        width: 60px;
    }

    .contactarme{
        color: white;
        display: block;
        margin-left: 100px;
        width: 40%;
        height: 600px;
        float: left;
    }

    .contactarme .menu ul{
        position: absolute;
        line-height: 50px;
        top: 2500px;
        margin-left: 15%;
        width: 250px;
    }

    .contactarme .menu ul li a{
        color: white;   
    }



    /** .contactarme #Gmail{
        background-color: white;
        border-radius: 20px;
        position: absolute;
        top: 2550px;
        left: 26%;
    }

    .contactarme #Email{
        position: absolute;
        top: 2580px;
        left: 330px;
        color: white;

    } 
    
    .contactarme #Email2{
        position: absolute;
        top: 2610px;
        left: 315px;
        color: white;

    }


    .contactarme #telefono{
        background-color: white;
        border-radius: 20px;
        position: absolute;
        top: 2660px;
        left: 26%;

    }

    .contactarme li{
        list-style: none;
        position: absolute;
        top: 2690px;
        left: 360px;
        color: white;
    }



    .contactarme #linkedin{
        background-color: white;
        border-radius: 20px;
        position: absolute;
        top: 2740px;
        left: 26%;

    }

    .contactarme #linkedinA{
        position: absolute;
        top: 2770px;
        left: 315px;
        color: white;

    }



    .contactarme #github{
        background-color: white;
        border-radius: 20px;
        position: absolute;
        top: 2810px;
        left: 26%;

    }

    .contactarme #githubA{
        position: absolute;
        top: 2840px;
        left: 370px;
        color: white;

    }


    .contactarme #behance{
        background-color: white;
        border-radius: 20px;
        position: absolute;
        top: 2890px;
        left: 26%;

    }

    .contactarme #behanceA{
        position: absolute;
        top: 2915px;
        left: 375px;
        color: white;

    }*/

    input[type='text'] {
        border-radius: 5px;
        border: none;
        position: absolute;
        top:2500px;
        left: 55%;
        height: 40px;
        width: 600px;
        float: none;
    }

    input[type='text']::placeholder{
        position: absolute;
        top: 13px;
        left: 10px;
    }


    #segundo{
        border: none;
        border-radius: 5px;
        position: absolute;
        top:2570px;
        left: 55%;
        height: 40px;
        width: 600px;
        float: none;
    }

    #tercero{
        border: none;
        border-radius: 5px;
        line-height: 200px;
        text-align: left;
        position: absolute;
        top:2650px;
        left: 55%;
        height: 200px;
        width: 600px;
        float: none;
    }

    #tercero::placeholder{
        position: absolute;
        top: 10px;
        left: 10px;
    }

    input[type='submit']{
        color: white;
        border-radius: 5px;
        position: absolute;
        top: 2890px;
        left: 55%;
        width: 605px;
        height: 55px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: none;
        font-size: 30px;
        background-color: #187AFD;
    }

    /**Copyrigth */

    .copyright > h3{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: black;
        padding-top: 10px;
        height: 40px;
        text-align: center;
        color: white;
    }

</style>