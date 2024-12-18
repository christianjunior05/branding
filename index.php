<?php

require_once "traitement.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <link rel="stylesheet" href="src/css/output.css">
    <link rel="stylesheet" href="src/css/main.css">


<body>

    <header class="grid grid-cols-2 bg-blue  max-[700px]:grid-cols-1 p-10">


        <div class="text-white  pt-5  flex justify-center items-center mb-3 ">
            <div class="    w-4/6 h-5/6 m-auto  flex flex-col justify-between max-lg:w-full ">
                <p class="  m-auto  font-extrabold text-2xl  uppercase text-center  w-11/12 "> Le plan en 4 étapes
                    pour
                    <span class="underline block">creer et vendre
                    </span>votre premiere formation en ligne
                </p>
                <p class=" text-2xl w-5/6 text-start mb-2  max-sm:text-center m-auto">Meme si vous n'avez pas
                    d'audience
                    que vous debutez de zero et sans budjet publicité</p>

                <div>

                    <div class="  formulaire_radio   ">
                        <Strong class=" m-auto borderfont-light text-2xl block first-letter:uppercase mb-3 text-center">
                            inscrivez-vous dès maintenant 👇</Strong>


                        <div class="bg-gray-200 py-2 pl-7 pr-2 mb-4 rounded-full flex  items-center "><span
                                class="text-black text-xl block w-11/12 ">Lundi 09/12 à 12h30</span> <i
                                class="fa-regular fa-circle-check text-center   outline outline-1 outline-gray-400  text-white  bg-white scale-150  rounded-full cursor-pointer hover:bg-indigo-600 hover:outline-indigo-600   "></i>
                        </div>
                        <div class="bg-gray-200 py-2 pl-7 pr-2 rounded-full flex  items-center "><span
                                class="text-black text-xl block w-11/12 ">Lundi 09/12 à 12h30</span> <i
                                class="fa-regular fa-circle-check text-center   outline outline-1 outline-gray-400  text-white  bg-white scale-150  rounded-full cursor-pointer hover:bg-indigo-600 hover:outline-indigo-600  "></i>
                        </div>

                    </div>

                    <form class="formulaire_email " method="POST" action="traitement.php">

                        <input id="email" type="email" placeholder="Email" name="email"
                            class="w-full p-3 rounded-md placeholder:text-2xl mb-8 text-black "
                            value="<?php echo $email ?>" required>
                        <?php echo $email_error ?></span>
                        <input id="fullname" type="text" placeholder="votre nom" name="fullname"
                            class="w-full p-3 rounded-md placeholder:text-2xl mb-8 text-black"
                            value="<?php echo $fullname ?>" required>
                        <span class="block text-red-600">
                            <button id="button"
                                class=" cursor-pointer block text-2xl font-semibold m-auto py-2 w-80 max-[1070px]:w-64 max-[1070px]:text-xl text-center  rounded-md text-white mb-10 bg-sky-400 hover:bg-sky-600 transition-colors "
                                name="submit"> s'inscrire gratuitement </button>

                    </form>
                </div>
            </div>
        </div>

        <div class="   text-center  h-auto"> <img src="fr.png" alt="" class="  m-auto  p-3  h-auto   "></div>



    </header>

    <section class=" apparaitre ">
        <ul
            class=" bg-slate-950 grid grid-cols-4 max-md:place-items-center  max-md:grid-cols-2 max-[480px]:grid-cols-1  ">
            <li class="   flex flex-col  items-center   w-48 max-[480px]:mb-2  m-auto  max-[480px]:p-4"><img
                    src="coins-removebg-preview.png" alt="" class=" w-36">
                <p class="text-white font-medium text-xl">+500K€ encaissé en 1 an</p>
            </li>
            <li class="   h-2/3  flex flex-col justify-center  size-48 max-[480px]:mb-2 m-auto  max-[480px]:p-4">
                <img src="tiktok.avif" alt="" class="w-36  ">
                <p class="text-white font-medium text-xl">+800K abonnés</p>
            </li>
            <li class="   h-2/3  flex flex-col justify-center  size-48 max-[480px]:mb-2 m-auto "><img src="linkdin.png"
                    alt="" class="w-36">
                <p class="text-white font-medium text-xl">+55K abonnés</p>
            </li>
            <li class="    h-2/3  flex flex-col justify-center  w-48  max-[480px]:mb-2 m-auto  max-[480px]:p-4">
                <img src="insta5.PNG" alt="" class="w-36">
                <p class="text-white font-medium text-xl">+161K abonnés</p>
            </li>
        </ul>
    </section>
    <section class="decouvrez p-10 mb-10 bg-slate-200   ">
        <h1 class=" text-5xl font-extrabold uppercase  text-center mb-10 text-blue "> ce que vous decouvrez</h1>
        <div
            class="  w-11/12 flex max-[800px]:flex-col max-[800px]:m-auto max-[800px]:items-center  justify-evenly m-auto">

            <div class=" apparaitre  p-4 w-72  text-white rounded-md inline-block mb-3 bg-blue   max-[800px]:w-full ">

                <p class="text-2xl font-bold  leading-6 mb-4"> Trouver une idée de formation qui sera exactement ce
                    dont
                    votre client cible a besoin
                </p>
                <div>
                    <img src="graph1.jpg " alt="" class="rounded-md mb-3">
                </div>


                <p class="text-xl">Vous en savez plus que <strong>90% des gens</strong> sur votre domaine
                    d'expertise, donc vous avez forcément de la matière grise à vendre !
                    Si vous ne savez pas encore quoi, c'est normal</p>
            </div>


            <div
                class=" apparaitre p-4 w-72  h-3/4 text-white rounded-md  inline-block mb-3 bg-blue mx-3 max-[800px]:w-full ">

                <p class="text-2xl font-bold  leading-6 mb-4  ">Ma méthode pour créer LA formation irrésistible</p>
                <div>
                    <img src="graph1.jpg " alt="" class="rounded-md mb-3">
                </div>


                <p class="text-xl">Vous en savez plus que <strong>90% des gens</strong> J'ai créé et vendu +16
                    formations en 3ans. Je sais exactement ce qu'il faut pour qu'elle soit efficace et qu'elle se
                    vende
                </p>
            </div>


            <div class="apparaitre  p-4 w-72  text-white rounded-md  inline-block mb-3 bg-blue max-[800px]:w-full  ">

                <p class="text-2xl font-bold  leading-6 mb-4  "> Les différentes techniques pour la vendre
                </p>
                <div>
                    <img src="graph1.jpg " alt="" class="rounded-md mb-3">
                </div>


                <p class="text-xl">Quelles sont les différentes méthodes que vous
                    pourrez utiliser pour lancer votre produit.
                    omment j'ai réussi à encaisser +500.000€ en
                    1 an alors que tout le monde disait que les formations en ligne étaient mortes.</p>
            </div>

        </div>
    </section>

    <section class=" apparaitre qui suis-je">
        <h2 class="font-extrabold text-6xl uppercase  text-center mb-4 text-blue"> qui suis-je ?</h2>



        <div class="flex    flex-row  max-[800px]:flex-col  justify-evenly w-10/12 m-auto mb-16  ">
            <div class="border w-2/4 text-xl p-5 rounded-md shadow-2xl  max-[800px]:w-full max-[800px]:m-auto">
                <p class="mb-7">Hello, moi c'est Frederic 👋</p>
                <p class="mb-7">Coach Emploi et <strong>Personal Branding</strong>
                </p>
                <p class="mb-7"> <strong>J’aide des étudiants</strong>, <strong>professionnels et entrepreneurs à
                        obtenir</strong>,
                    , des opportunités grâce à la
                    construction d’un personal branding efficace
                </p>


                <p class="mb-7">En 1 an, j'ai encaissé <strong>+500.000€ de CA</strong> grâce à mes produits en
                    ligne.

                    Aujourd'hui, je vis à temps plein grâce à mes réseaux sociaux et mes
                    formations : <strong>je vous apprends à faire la même chose</strong> .</p>


                <strong class="block mb-7">
                    🏆 3x Linkedin Top Voice
                    🏆 Top 100 Leader et entrereuneurs Afrique francophone
                </strong>

                <p class="">Je veux vous partager ce qui m'a permis d'obtenir ces
                    résultats concrets. Alors inscrivez-vous 👇
                </p>

            </div>

            <div class=" h-auto ">
                <img src="fr.png" alt="" class="block  max-[800px]:m-auto   h-auto">

            </div>
        </div>
        <div
            class=" text-2xl font-bold m-auto   w-96  h-14 flex items-center justify-center  rounded-md text-white mb-10 bg-blue   hover:bg-sky-600 hover:transition">
            <a href="">je veux voir ça <i class="fa-solid fa-chevron-right  "></i></a>
        </div>
    </section>

    <section class="apparaitre fait confiance p-10 mb-10 apparaitre bg-blue">
        <h1 class=" text-5xl font-extrabold uppercase  text-center mb-10 text-white"> il m'ont fait confiance</h1>
        <div class="  w-11/12 flex  justify-evenly m-auto max-[900px]:flex-col ">

            <div class=" text-center  p-4 w-96 bg-white  rounded-md inline-block mb-3  mr-4  max-[900px]:w-full ">
                <p class="text-2xl   leading-8 mb-4  ">
                    " Ma rencontre avec Frédéric sur LinkedIn a été un vrai coup de boost ! Son coaching est aussi
                    pratique qu’un couteau suisse 🗡️,
                    faire d'elle <strong>avec des techniques simples à mettre en œuvre. Mais le secret de
                        Frédéric ?
                        <strong> Sa disponibilité légendaire ! Il sait jongler avec les contraintes comme un pro du
                            cirque
                            🎪. Alors, si toi aussi tu as besoin d’aide,</strong> ne cherche plus : </strong>
                    <strong>contacte Frédéric
                        !</strong>

                    <strong class="block mt-5">Daniéla eyang</strong>
                </p>
                <div class=" bg-blue rounded-full m-auto " style="height: 100px; width: 100px; ;">
                    <img src="daniela.jpg" class="rounded-full h-full w-full  object-cover" alt="">
                </div>



            </div>

            <div
                class=" text-center  p-4 w-96  bg-white h-96  rounded-md inline-block mb-3 mr-4 max-[900px]:w-full   max-xl:h-3/6">


                <p class="text-2xl text-center w-11/12 h-auto m-auto mb-3 ">


                    <strong>Frédéric est très dynamique et bienveillant.
                        Expert dans son domaine, je recommande fortement ses services.

                    </strong>
                    <strong class="block mt-5">Mariam KAMAGATE</strong>
                </p>
                <div class=" bg-red-400 rounded-full m-auto " style="height: 100px; width: 100px; ;">
                    <img src="mariam.jpg" class="rounded-full h-full w-full  object-cover" alt="">
                </div>



            </div>



            <div class=" text-center  p-4 w-96 bg-white  rounded-md inline-block mb-3  max-[900px]:w-full  ">
                <p class="text-2xl   leading-8 mb-4  ">
                    "J'ai eu l'opportunité de collaborer avec Frédéric à deux occasions: (i) dans le cadre de mon
                    association et (ii) à titre personnel.
                    <strong>Il est à l'écoute, positif et encourage beaucoup.
                        Si vous souhaitez un accompagnement en personal branding et social selling, n'hésitez pas à
                        faire
                        appel à lui. Il est très disponible.
                        Je le recommande vivement.</strong>
                    <strong> sait
                        transmettre mieux que personne.</strong>
                    <strong class="block mt-5">Vanessa S TCHAMYOU</strong>
                </p>
                <div class=" bg-red-400 rounded-full m-auto " style="height: 100px; width: 100px; ;">
                    <img src="Vanessa.jpg" class="rounded-full h-full w-full  object-cover" alt="">
                </div>


            </div>

    </section>
    Ses contenu
    <section class=" apparaitre pb-10">

        <div class="   pt-10 ">

            <p
                class="text-3xl font-extrabold  uppercase   w-6/12 text-center  m-auto mb-10  text-blue  max-[600px]:w-9/12 max-[448px]:w-full  px-4 ">
                debloquez le potentiel de votre busines en creant votre formation en ligne</p>

            <div class="w-4/12 m-auto  max-[910px]:w-6/12 max-[600px]:w-9/12 max-[448px]:w-full px-4  ">
                <p class=" m-auto  text-2xl block first-letter:uppercase mb-3 text-center"> inscrivez-vous dès
                    maintenant 👇</p>
                <div class=" apparaitre formulaire_radio   ">

                    <div class="bg-gray-200 py-2 pl-7 pr-2 mb-4 rounded-full flex  items-center "><span
                            class="text-black text-xl block w-11/12 ">Lundi 09/12 à 12h30</span> <i
                            class="fa-regular fa-circle-check text-center   outline outline-1 outline-gray-400  text-white  bg-white scale-150  rounded-full cursor-pointer hover:bg-indigo-600 hover:outline-indigo-600   "></i>
                    </div>
                    <div class="bg-gray-200 py-2 pl-7 pr-2 rounded-full flex  items-center "><span
                            class="text-black text-xl block w-11/12 ">Lundi 09/12 à 12h30</span> <i
                            class="fa-regular fa-circle-check text-center   outline outline-1 outline-gray-400  text-white  bg-white scale-150  rounded-full cursor-pointer hover:bg-indigo-600 hover:outline-indigo-600  "></i>
                    </div>

                </div>

                <form class="formulaire_email" method="POST" action="">
                    <input type="email" placeholder="Email" name="email"
                        class="w-full p-3 rounded-md placeholder:text-2xl mb-8 " value="<?php $email ?>" required>
                    <span class="block text-red-600"> <?php echo $email_error ?></span>
                    <input type="text" placeholder=" votre nom" name="fullname"
                        class="w-full p-3 rounded-md placeholder:text-2xl mb-8" required <?php $fullname_error ?>>
                    <button
                        class=" text-2xl font-semibold m-auto py-2 w-80 max-[1070px]:w-64 max-[1070px]:text-xl     text-center  rounded-md text-white mb-10 bg-blue hover:bg-sky-600 transition-colors "
                        name="submit"><a href="">s'inscrire gratuitement > </a></button>

                </form>
            </div>


        </div>

        </div>

        </div>
    </section>

    <footer class="apparaitre  bg-black text-white py-4  ">
        <div class="flex flex-col justify-center items-center h-96  ">

            <h3
                class="text-3xl  font-bold uppercase w-40  max-sm:w-52 max-sm:text-center max-sm:font-semibold  text-center ">
                Votre King Préféré</h3>

            <p class=" text-2xl font-light first-letter:uppercase w-40 text-center  max-sm:text-center  ">mention
                legale
                CGV</p>

            <p class="text-2xl font-light w-4/5 text-center   max-sm:text-xl max-[440px]:text-sm "> Ce site ne fait
                pas
                partie du site YouTube™, Google™, Facebook™, Google Inc.
                ou Facebook Inc. De plus, ce site n’est PAS approuvé par YouTube™, Google™ ou Facebook™
                en aucune façon. FACEBOOK™ est une marque de commerce de FACEBOOK, Inc.
                GOOGLE™ et YOUTUBE™ sont des marques de commerce de GOOGLE Inc.</p>
        </div>
    </footer>

    <script src="index.js" defer></script>
</body>

</html>