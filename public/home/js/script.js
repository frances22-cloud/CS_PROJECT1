
const SearchBox=document.querySelector('.SearchBox');
const searchBtn=document.querySelector('.searchBtn');
const recipeContainer=document.querySelector('.recipe-containe');

//function to get recipes
const fetchRecipes= async(query)=>{
    const data =await fetch(`thttps://www.themealdb.com/api/json/v1/1/search.php?s=${query}`);
    const response=await data.json();
    console.log(response.meals[0]);
}

searchBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const searchInput=SearchBox.Value.trim();
    fetchRecipes(searchInput);
    //console.log("Button Clicked");
});