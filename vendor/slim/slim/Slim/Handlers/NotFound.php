<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2017 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Slim\Handlers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Body;
use UnexpectedValueException;

/**
 * Default Slim application not found handler.
 *
 * It outputs a simple message in either JSON, XML or HTML based on the
 * Accept header.
 */
class NotFound extends AbstractHandler
{
    /**
     * Invoke not found handler
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     * @param  ResponseInterface      $response The most recent Response object
     *
     * @return ResponseInterface
     * @throws UnexpectedValueException
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $contentType = $this->determineContentType($request);
        switch ($contentType) {
            case 'application/json':
                $output = $this->renderJsonNotFoundOutput();
                break;

            case 'text/xml':
            case 'application/xml':
                $output = $this->renderXmlNotFoundOutput();
                break;

            case 'text/html':
                $output = $this->renderHtmlNotFoundOutput($request);
                break;

            default:
                throw new UnexpectedValueException('Cannot render unknown content type ' . $contentType);
        }

        $body = new Body(fopen('php://temp', 'r+'));
        $body->write($output);

        return $response->withStatus(404)
                        ->withHeader('Content-Type', $contentType)
                        ->withBody($body);
    }

    /**
     * Return a response for application/json content not found
     *
     * @return ResponseInterface
     */
    protected function renderJsonNotFoundOutput()
    {
        return '{"message":"Not found"}';
    }

    /**
     * Return a response for xml content not found
     *
     * @return ResponseInterface
     */
    protected function renderXmlNotFoundOutput()
    {
        return '<root><message>Not found</message></root>';
    }

    /**
     * Return a response for text/html content not found
     *
     * @param  ServerRequestInterface $request  The most recent Request object
     *
     * @return ResponseInterface
     */
    protected function renderHtmlNotFoundOutput(ServerRequestInterface $request)
    {
        $homeUrl = (string)($request->getUri()->withPath('')->withQuery('')->withFragment(''));
        $faviconUrl = (string)'http://'.($request->getUri()->getHost()).'/Proyecto_Licencias/img/favicon.png';
        $background = (string)'http://'.($request->getUri()->getHost()).'/Proyecto_Licencias/img/licencias_background.jpg';
        return <<<END
<html >
<head>
  <meta charset="UTF-8">
  <title>404 error page</title>
  <link rel="shortcut icon" href="$faviconUrl" />
    <style>
    @import url(http://fonts.googleapis.com/css?family=Raleway:700);
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background: url($background) no-repeat center center fixed;
  background-size: cover;
  font-family: 'Raleway', sans-serif;
  background-color: white;
}

.text-wrapper {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.title {
  font-size: 6em;
  font-weight: 700;
  color: #EE4B5E;
}

.subtitle {
  font-size: 40px;
  font-weight: 700;
  color: #1FA9D6;
}

.buttons {
  margin: 30px;
}
.buttons a.button {
  font-weight: 700;
  border: 2px solid #EE4B5E;
  text-decoration: none;
  padding: 15px;
  text-transform: uppercase;
  color: #EE4B5E;
  border-radius: 26px;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.buttons a.button:hover {
  background-color: #EE4B5E;
  color: white;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
    </style>
</head>
<body>
    <div class="text-wrapper">
        <div class="title" data-content="404">
            404 Página no encontrada
        </div>

        <div class="subtitle">
            Oops, La pagina que estás buscando no existe.
        </div>

        <div class="buttons">
            <a class="button" href="$homeUrl">Vuelve a la Página principal</a>
        </div>
    </div>
</body>
</html>

END;
    }
}

