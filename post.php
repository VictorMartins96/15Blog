<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        
        $postId = $_GET['id'];  //id do post
        $currentPost;   // variavel do post atual

        foreach($posts as $post) {  // para cada posts 

            if($post['id'] == $postId) { // se o id do post for igual ao id do array de dados
                $currentPost = $post;  // ele se torna o post atual
            }
        }

    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>:">
            </div>
            <p class="post-content">
            Programar em PHP é uma experiência rica e envolvente, especialmente para desenvolvedores que desejam construir aplicações web dinâmicas e interativas. PHP, que significa "Hypertext Preprocessor", é uma linguagem de programação de código aberto amplamente utilizada para o desenvolvimento web. Sua popularidade se deve à sua simplicidade, flexibilidade e à vasta comunidade que a suporta.

<h2>História e Evolução do PHP</h2><br>
PHP foi criado por Rasmus Lerdorf em 1994, inicialmente como um conjunto de ferramentas para rastrear visitas em seu currículo online. Desde então, evoluiu significativamente, passando por várias versões que acrescentaram funcionalidades e melhorias de desempenho. A versão 7, por exemplo, trouxe um aumento substancial na velocidade e melhorias no consumo de memória, tornando o PHP ainda mais competitivo em relação a outras linguagens de programação.<br>

<h2>Por que Usar PHP?</h2>
<ul>
<li>Fácil de Aprender: PHP tem uma sintaxe clara e acessível, o que o torna uma excelente escolha para iniciantes. Os desenvolvedores podem rapidamente começar a criar scripts simples e avançar para projetos mais complexos.</li>

<li>Integração com Bancos de Dados: PHP se integra facilmente com diversos sistemas de gerenciamento de banco de dados, sendo o MySQL o mais popular. Essa integração permite que desenvolvedores criem aplicações que armazenam e manipulam dados de forma eficiente.</li>

<li>Comunidade Ativa: A comunidade PHP é vibrante e ativa, oferecendo uma vasta gama de recursos, como fóruns, tutoriais e bibliotecas de código aberto. Isso significa que desenvolvedores podem encontrar facilmente suporte e soluções para problemas comuns.</li>

<li>Frameworks Poderosos: PHP conta com diversos frameworks, como Laravel, Symfony e CodeIgniter, que ajudam a acelerar o desenvolvimento. Esses frameworks oferecem estrutura e funcionalidades pré-construídas, permitindo que os desenvolvedores se concentrem na lógica do aplicativo em vez de se preocupar com a configuração básica.</li>

<li>Ampla Compatibilidade de Hospedagem: A maioria dos provedores de hospedagem suporta PHP, tornando-o uma escolha prática para projetos que precisam ser colocados online rapidamente.</li>
</ul>
</p>
        </div>
    </main>
<?php
    include_once("templates/footer.php");
?>