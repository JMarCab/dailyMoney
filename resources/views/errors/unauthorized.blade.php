<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">

<div id="sign-wrapper">
    <div id="hole1" class="hole"></div>
    <div id="hole2" class="hole"></div>
    <div id="hole3" class="hole"></div>
    <div id="hole4" class="hole"></div>
    <header id="header">
        <h1>403 prohibido</h1>
        <div id="strike1" class="strike"></div>
        <div id="strike2" class="strike"></div>
    </header>
    <section id="sign-body">
        <div id="copy-container">
            <h2>Sólo Personal Autorizado</h2>
            <p><strong>Error 403: Prohibido</strong>. Sólo los administradores pueden acceder a esta página.</p>
        </div>
        <div id="circle-container">
            <svg version="1.1" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                <defs>
                    <pattern id="image" patternUnits="userSpaceOnUse" height="450" width="450">
                        <image x="25" y="25" height="450" width="450"
                            xlink:href="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png">
                        </image>
                    </pattern>
                </defs>
                <circle cx="250" cy="250" r="200" stroke-width="40px" stroke="#ef5350" fill="url(#image)" />
                <line x1="100" y1="100" x2="400" y2="400" stroke-width="40px" stroke="#ef5350" />
            </svg>
        </div>
    </section>
    <div id="button-container">
        <a href="{{ route('welcome') }}" class="btn btn-danger">Volver a la página de inicio</a>
    </div>
</div>

<style>
    html {
        background-color: #36383f;
        font-size: 20px;
    }

    :root {
        --hole-distance: 25px;
    }

    #hole1 {
        top: var(--hole-distance);
        left: var(--hole-distance);
    }

    #hole2 {
        top: var(--hole-distance);
        right: var(--hole-distance);
    }

    #hole3 {
        bottom: var(--hole-distance);
        left: var(--hole-distance);
    }

    #hole4 {
        bottom: var(--hole-distance);
        right: var(--hole-distance);
    }

    .hole {
        width: 20px;
        height: 20px;
        position: absolute;
        border-radius: 50%;
        background-image: radial-gradient(circle at 99%, #f4f4f4 10%, grey 70%);
        transform: rotate(45deg);
    }

    #sign-wrapper {
        background-color: #f4f4f4;
        position: relative;
        width: 80%;
        min-width: 340px;
        max-width: 800px;
        height: 80%;
        margin: 2% auto;
        padding: 50px;
        border: 1px solid #e9ecf0;
        border-radius: 45px;
        box-shadow: 5px 5px 10px #000;
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
    }

    #header {
        background-color: #ef5350;
        padding: 20px;
        border-radius: 30px 30px 0 0;
        text-align: center;
    }

    h1 {
        text-transform: uppercase;
        color: #f4f4f4;
        font-size: 5.5em;
        line-height: .9em;
        letter-spacing: 3px;
        margin: 0;
        font-weight: 900;
    }

    .strike {
        position: absolute;
        width: 25%;
        height: 10px;
        background-color: #fff;
    }

    #strike1 {
        top: 115px;
        left: 80px;
    }

    #strike2 {
        top: 115px;
        right: 80px;
    }

    #sign-body {
        display: flex;
        flex-wrap: nowrap;
    }

    #copy-container {
        flex-basis: 60%;
    }

    #circle-container {
        flex-basis: 40%;
    }

    h2,
    p {
        text-align: center;
        color: #1d1e22;
    }

    h2 {
        font-size: 3em;
        text-transform: uppercase;
        margin: 40px 0;
        line-height: .9em;
    }

    p {
        font-size: 20px;
    }

    @media screen and (max-width: 930px) {
        #sign-wrapper {
            font-size: .75rem;
        }
    }

    @media screen and (max-width: 750px) {
        #sign-wrapper {
            font-size: .6rem;
        }

        h2 {
            margin: 25px 0;
        }

        .strike {
            visibility: hidden;
        }
    }

    @media screen and (max-width: 600px) {
        #sign-wrapper {
            font-size: .4rem;
            padding: 15px;
            border-radius: 25px;
        }

        #header {
            border-radius: 20px 20px 0 0;
        }

        #circle-container {
            width: 50%;
        }

        .hole {
            width: 10px;
            height: 10px;
        }

        :root {
            --hole-distance: 8px;
        }
    }

    @media screen and (max-width: 450px) {
        #sign-wrapper {
            font-size: .34rem;
        }

        h2 {
            margin: 10px;
        }

        p {
            font-size: 14px;
        }
    }

    #button-container {
    text-align: center;
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ef5350;
    color: #fff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #d32f2f;
}
</style>
