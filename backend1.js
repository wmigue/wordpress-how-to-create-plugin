class fetchData {
    _formdata
    _url
    _opcion
    _method
    constructor() {
        this._method = 'POST'
    }
    setMethod(m) {
        this._method = m
    }
    setFormData(fd) {
        this._formdata = fd
    }
    setUrl(url) {
        this._url = url
    }
    async fetchDataAsync() {
        const res = await fetch(this._url, {
            method: this._method,
            body: this._formdata ?? this._formdata,
        })
        return res

    }
}




//instancias
document.addEventListener('DOMContentLoaded', function () {

    document.querySelector('.click-wm').addEventListener('click', () => {
        const divs = document.querySelector('.divHTML')
        const status = document.querySelector('.status')
        const query = document.getElementById('query')
        const tags = document.getElementById('tags')
        console.log(query, tags);
        if (query.value != '' && tags.value != '') {
            status.innerHTML='cargando... espere...'
            status.style.color = 'red'
            const fd = new FormData()
            fd.append('data', JSON.stringify([{ query: query.value, tags: tags.value }]))
            const fetch = new fetchData()
            fetch.setMethod('POST')
            fetch.setUrl(wmigue_backend.fetchar1)
            fetch.setFormData(fd)
            fetch.fetchDataAsync()
                .then(x => x.json())
                .then(x => {
                    console.log(x.response)
                    if(x.response === 1){
                        status.innerHTML='procesado con ÉXITO!'
                        status.style.color = 'green'
                        setTimeout(() => {
                            status.innerHTML=''
                        }, 3000);
                        alert('GUARDADO CON EXITO: ' + query.value + ' : ' + tags.value)
                        query.value=''
                        tags.value=''
                    }
                })
        }else{
            alert('completa todos los campos')
        }
    })


})