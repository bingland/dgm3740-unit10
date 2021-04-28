// menu activation
let urlString = document.location.href
console.log(urlString)
let urlArray = urlString.split('/')
console.log(urlArray)
let pageHREF = urlArray[urlArray.length-1].replace('.php', '')
console.log(pageHREF)
let menu = document.querySelectorAll('.nav-link')

let matchfound = false

for (let item of menu) {
    let currentURL = item.getAttribute('href').replace('.php', '').replace('/', '')
    console.log(currentURL)
    console.log(`${currentURL} === ${pageHREF}`)

    if (currentURL === pageHREF) {
        console.log('Match!')
        item.className = 'nav-link active'
        matchfound = true
    } else {
        item.className = 'nav-link'
    }
}