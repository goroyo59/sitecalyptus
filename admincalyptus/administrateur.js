
const articles = [  // tableau d'articles -> des objets
{
    id: 1,
    denomination: "Arch Enemy",
    dispo: 'EN STOCK',
    price: 38,
  
},
{
    id: 2,
    denomination: "Nightwish",
    dispo: 'EN STOCK',
    price: 32,
   
},
{
    id: 3,
    denomination: "Bob Marley",
    dispo: 'EN STOCK',
    price: 17,
    
 
},
{
    id: 4,
    denomination: "Beethoven",
    dispo: 'EN STOCK',
    price: 15,

 
},
{
    id: 5,
    denomination: "Michael Jackson",
    dispo: 'EN STOCK',
    price: 30,
  
 
},
{
    id: 6,
    denomination:"Prince",
    dispo:" EN STOCK",
    price:20,
}
]
const produits=document.querySelector('.Produits')
const ajouter=document.querySelector('.Ajouter')
const table=document.querySelector('table')
const tbody=document.querySelector('tbody')
const thead=document.querySelector('thead')


produits.appendChild(table)
table.append(thead,tbody)


const displayArticle = () => {
    const articleNode = articles.map((article, index) => {
      
            return creatarticleElement(article)
    })
    tbody.append(...articleNode);
}


const creatarticleElement = (article) => {
    const trtable=document.createElement('tr')
    trtable.classList.add('trtable')
    
    const tdid = document.createElement('td');
    tdid.classList.add('id');
    tdid.innerText=article.id

    const tdname = document.createElement('td');
    tdname.classList.add('denomination');
    tdname.innerText=article.denomination

    const tdprix = document.createElement('td');
    tdprix.classList.add('prix');
    tdprix.innerText=article.price+'€'
    
    const tddispo = document.createElement('td');
    tddispo.classList.add('dispo');
    tddispo.innerText=article.dispo

    const tdaction = document.createElement('td');
    tdaction.classList.add('Action');
    
    
    const btnEdit = document.createElement('button');
    btnEdit.classList.add('Modifier')
    btnEdit.innerText = "Modifier";

    const btnDelete = document.createElement('button');
    btnDelete.classList.add('Supprimer')
    btnDelete.innerText = "Supprimer";
    
   

trtable.append(tdid,tdname,tdprix,tddispo,tdaction)
    tdaction.append(btnEdit,btnDelete)

return trtable;

 
}

displayArticle();
