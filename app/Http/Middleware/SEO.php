<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use SEO as SEOMAnager;

class SEO
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $title = "Murillo Jesus - Desenvolvedor FullStack Web e Mobile";
        $description = "Arquiteto de Software, Educador em Tecnologia, CEO StarEscola: Gestão Educacional.";
        $body        = "Formado em Análise e Desenvolvimento de Sistemas no Instituto Federal de São Paulo
                        Membro ativo e Intusiasta nas Comunidades Tecnologicas VueJS e Laravel
                        Amante de tendências Javascript! A Linguagem da década.";

        SEOManager::setTitle($title);
        SEOManager::setDescription($description);

        view()->share(compact('title','description','body'));

        return $next($request);
    }
}
