<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Flex\Response;

class FooController extends Controller
{
    /**
     * @Route("/welcome/{name}",
     *     name="foo",
     *     defaults={"name"="Whatever"},
     *     requirements={"name"="[A-Za-z]+"}
     *     )
     *
     * @param Request
     * @return  Response
     */
    public function index(string $name)
    {
        //$some_var = $request->query->get("name");

        return $this->render('foo/index.html.twig', [
            'name' => $name
        ]);

    }

    /**
     * @Route("/", name = "hello_page")
     */

    public function hello_page()
    {
        return $this->render('hello_page.html.twing');
    }


    /**
     * @Route("/test", name = "test")
     */
    public function test()
    {
        return $this->render('foo/test.html.twig');
    }


}
