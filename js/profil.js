export default class Profilliste{

    constructor() {
        this.data ={
            password: 'Unimatch'
        }

        this.rootElem = document.querySelector('.Profilliste');
        this.filter = this.rootElem.querySelector('.filter')
        this.items = this.rootElem.querySelector('.items')

        this.afstandSearch = this.filter.querySelector('.afstandSearch')
        this.forholdSearch = this.filter.querySelector('.forholdSearch')
        this.alderSearch = this.filter.querySelector('.alderSearch')

    }
    async init(){

        this.afstandSearch.addEventListener('input', () =>{
            if (this.afstandSearch.value.length >= 3 ){
                this.render()
            }
        });
        this.forholdSearch.addEventListener('input', () =>{
            if (this.forholdSearch.value.length >= 2 ){
                this.render()
            }
        });

        this.alderSearch.addEventListener('input', () =>{
            if (this.alderSearch.value.length >= 2 ){
                this.render()
            }
        });

        await this.render();
    }

    async render(){
        const data = await this.getData();
        const row = document.createElement('div');
        row.classList.add('row');
        console.log(data)

        for (const item of data){
            const col  = document.createElement('div');
            col.classList.add( 'col-6','col-sm-6','col-md-6', 'col-lg-4', 'col-xl-3');

            col.innerHTML = `
            <div class="card">
            ${(item.MatchBillede) ? `<img src="uploads/${item.MatchBillede}" class="card-img-top" >` : "Ingen billede" }
            
            <div class="card-body">
            <h5 class="card-title">${item.MatchNavn}</h5>
            <p class="card-text">${item.MatchAfstand}</p>
            <p class="card-text">${item.MatchAlder}</p>
            <p class="card-text">${item.MatchForhold}</p>
            <p class="card-text">${item.MatchBeskrivelse}</p>
            <a href="profilside.php?Matchid=${item.MatchId}" class="btn btn-light btn-outline-dark w-100">se profil</a>

            </div>
            
             
             </div> 
            
            `;
            row.appendChild(col)
        }

        this.items.innerHTML= '';
        this.items.appendChild(row)

    }

    async getData(){

        this.data.afstandSearch = this.afstandSearch.value;
        this.data.forholdSearch = this.forholdSearch.value;
        this.data.alderSearch = this.alderSearch.value;

        const  response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)

        })
        return await response.json();
    }
};
