using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using SportsStore.Domain.Entities;

namespace SportsStore.WebUI.Infrastructure.Binders
{

    //create a custom model binder that obtains the Cart object contained in the session data

    // benefits to using a custom model binder.
    // The first is that I have separated the logic which allows me to change the way I store Cart objects without needing to
    // change the controller.
    // The second benefit is that any controller class that works with Cart objects can simply declare
    // them as action method parameters and take advantage of the custom model binder.
    // The third benefit, and the one is now unit test the Cart controller without needing to mock a lot of ASP.NET
    // plumbing.

    public class CartModelBinder : IModelBinder
    {
        //IModelBinder interface defines one method: BindModel.

        private const string sessionKey = "Cart";

        public object BindModel(ControllerContext controllerContext, ModelBindingContext bindingContext)
        {

            //The ModelBindingContext gives you information about the model object you are being asked to build and some tools for making the binding process easier.


            // get the Cart from the session
            Cart cart = null;
            if (controllerContext.HttpContext.Session != null)
            {
                cart = (Cart)controllerContext.HttpContext.Session[sessionKey];
                //HttpContext property, which in turn has a Session property that lets me get and set session data.
            }
            // create the Cart if there wasn't one in the session data
            if (cart == null)
            {
                cart = new Cart();
                if (controllerContext.HttpContext.Session != null)
                {
                    controllerContext.HttpContext.Session[sessionKey] = cart;
                }
            }
            // return the cart
            return cart;
        }
    }
}