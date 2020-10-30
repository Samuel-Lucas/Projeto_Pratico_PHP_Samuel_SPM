function mudaEstilo() {
    let itemMenu = event.target

    itemMenu.addEventListener("mouseenter", function() {
        itemMenu.style.color = 'black'
    })

    itemMenu.addEventListener("mouseout", function() {
        itemMenu.style.color = 'white'
    })
}

function mudaEstilo2() {
    let li = event.target

    li.addEventListener("mouseenter", function() {
        li.style.backgroundColor = '#7575a3'
        li.style.color = 'white'
        li.style.textDecoration = 'underline'
        li.style.lineHeight = '30px'
        li.style.borderRadius = '10px'
    })

    li.addEventListener("mouseout", function() {
        li.style.backgroundColor = 'white'
        li.style.color = 'black'
        li.style.textDecoration = 'none'
        li.style.lineHeight = '15px'
        li.style.borderRadius = '0px'
    })
}

function exibirCategoria(categoria) {

    let container = document.querySelectorAll('#container')
    let elemento = document.querySelector('.'+categoria)

    for(let i = 0; i < container.length; i++) {

        if(container[i] == elemento) {
            container[i].style.display = 'flex'
        } else {
            container[i].style.display = 'none'
        }
    }
}

function abreImg() {
    let img = event.target

    let url = img.getAttribute('src')

    window.open(url,'Image','width=450px,height=450px,resizable=1')
}