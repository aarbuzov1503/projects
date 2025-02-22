document.addEventListener("DOMContentLoaded", ()=>{
    const e = document.documentElement
      , t = document.querySelector(".theme-switch")
      , o = t.querySelectorAll(".theme-switch__icon")
      , a = document.querySelector(".consult-hero")
      , l = a ? a.querySelectorAll(".hero__image img") : null
      , s = document.querySelector(".main-page .hero")
      , r = document.querySelector(".about-hero")
      , n = document.querySelector(".header__logo use");
    null === localStorage.getItem("theme") && localStorage.setItem("theme", "dark");
    const i = i=>{
        (e=>{
            o && (o.forEach(e=>e.classList.remove("theme-switch__icon--active")),
            "light" === e && t.querySelector(".dark").classList.add("theme-switch__icon--active"),
            "dark" === e && t.querySelector(".light").classList.add("theme-switch__icon--active"))
        }
        )(i),
        (e=>{
            s && ("light" === e && (s.style.backgroundImage = "url('/assets/img/light-bg.png')"),
            "dark" === e && (s.style.backgroundImage = "url('/assets/img/dark-bg.png')"))
        }
        )(i),
        (e=>{
            r && ("light" === e && (r.style.backgroundImage = "none"),
            "dark" === e && (r.style.backgroundImage = "url('/assets/img/about-dark.png')"))
        }
        )(i),
        (e=>{
            l && (l.forEach(e=>e.classList.remove("hero__image-active")),
            "light" === e && a.querySelector(".light").classList.add("hero__image-active"),
            "dark" === e && a.querySelector(".dark").classList.add("hero__image-active"))
        }
        )(i),
        (e=>{
            n && ("light" === e && n.setAttributeNS("http://www.w3.org/1999/xlink", "href", "/assets/img/sprite.svg#logo-dark"),
            "dark" === e && n.setAttributeNS("http://www.w3.org/1999/xlink", "href", "/assets/img/sprite.svg#logo"))
        }
        )(i),
        "light" === localStorage.getItem("theme") && (e.style.setProperty("--scheme", "light"),
        document.documentElement.classList.add("light-theme"),
        localStorage.setItem("theme", "light")),
        "dark" === localStorage.getItem("theme") && (e.style.setProperty("--scheme", "dark"),
        document.documentElement.classList.remove("light-theme"),
        localStorage.setItem("theme", "dark"))
    }
    ;
    i(localStorage.getItem("theme")),
    t.addEventListener("click", ()=>{
        let e = localStorage.getItem("theme");
        "dark" === e ? (localStorage.setItem("theme", "light"),
        i("light")) : "light" === e && (localStorage.setItem("theme", "dark"),
        i("dark"))
    }
    )
}
);
