using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using SportsStore.Domain.Abstract;



namespace SportsStore.WebUI.Controllers
{
    public class NavController : Controller
    {
        //// GET: Nav
        //public string Menu()
        //{
        //    return "Hello from NavController";
        //}
        private IProductRepository repository;


        //add a constructor that accepts an IProductRepository
        public NavController(IProductRepository repo)
        {
            repository = repo;
        }

        //use a LINQ query to obtain a list of categories
        //from the repository and passes them to the view.
        //bool horizontalLayout = false

        public PartialViewResult Menu(string category = null)
        {
            ViewBag.SelectedCategory = category;

            IEnumerable<string> categories = repository.Products
            .Select(x => x.Category)
            .Distinct()
            .OrderBy(x => x);

           
            return PartialView("FlexMenu", categories);

            //I removed the parameter that receives the orientation and changed the call to the PartialView method so that the FlexMenu view is always selected
            //string viewName = horizontalLayout ? "MenuHorizontal" : "Menu";
            //return PartialView(viewName, categories);
        }
    }
}