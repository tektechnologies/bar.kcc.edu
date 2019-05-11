using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using SportsStore.Domain.Abstract;
using SportsStore.Domain.Entities;

namespace SportsStore.WebUI.Controllers
{
    [Authorize]

    //When applied without parameters, the Authorization attribute grants access to the controller action methods to all authenticated users.



    public class AdminController : Controller
    {
        // GET: Admin

        //controller constructor declares a dependency on the IProductRepository interface, which Ninject will resolve when instances are created.


        private IProductRepository repository;
        public AdminController(IProductRepository repo)
        {
            repository = repo;
        }

        public ViewResult Index()
        {
            return View(repository.Products);
        }

        public ViewResult Edit(int productId)
        {
            Product product = repository.Products
            .FirstOrDefault(p => p.ProductID == productId);
            return View(product);

        }

        [HttpPost]
        public ActionResult Edit(Product product, HttpPostedFileBase image = null)
        {
            //check that the model binder has been able to validate the data submitted
            if (ModelState.IsValid)
            {
                if (image != null)
                {
                    product.ImageMimeType = image.ContentType;
                    product.ImageData = new byte[image.ContentLength];
                    image.InputStream.Read(product.ImageData, 0, image.ContentLength);
                }
                repository.SaveProduct(product);
                TempData["message"] = string.Format("{0} has been saved", product.Name);
                return RedirectToAction("Index");
            }
            else
            {
                // there is something wrong with the data values
                return View(product);
            }
        }
        //        I cannot use ViewBag in this situation because the user is being redirected.ViewBag passes data between the
        //controller and view, and it cannot hold data for longer than the current HTTP request.


        public ViewResult Create()
        {
            return View("Edit", new Product());
        }

        [HttpPost]
        public ActionResult Delete(int productId)
        {
            Product deletedProduct = repository.DeleteProduct(productId);
            if(deletedProduct != null)
            {
                TempData["message"] = string.Format(" {0} was deleted", deletedProduct.Name);
            }
            return RedirectToAction("Index");
        }

    }
}