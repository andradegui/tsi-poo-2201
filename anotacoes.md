# Padrões de templates de projetos

- A diferença entre os padrões de projeto: 

**Strategy** usa interface e **Template** usa classe abstrata. 

**Factory** evita instaciar classe em código cliente, é criada uma classe apenas para instanciar outras classes

# Liskov

- Liskov faz referência direta a herança. Caso vc sempre trabalhar com herança não irá se preocupar com este conceito. 

- Liskov usa polimorfismo

- Esse padrão ñ é respeitado quando vc cria uma classe abstrata com métodos abstratos. Porém quando vc cria uma classe para extender essa outra classe (com métodos), começa a criar novos métodos na classe q sede os métodos.

# Como saber se está aplicando bem os conceitos

- Caso usar o OCP e LSP automaticamente vc atende ao ultimo conceito de inversão de dependencia

# Interface Segregation

- Nenhum código cliente deve depender de outros códigos. Eles dependem apenas dos que realmente precisam e usam.

# Quando usar os conceitos?

- Quando for refatorar o código, iremos aplicar. Ou quando um calo apertar e vc ter que mexer no código pela 2º vez, vc VAI TER que aplicar conceitos do SOLID. 

# DIP (Dependency Inversion)

- **Módulo de alto nível** (onde ficam os códigos mais usados, quando usam a biblioteca da própria linguagem) deve sofrer muito menos alteração do que o **módulo de baixo nível** (onde fica calculos, interações com outros sistemas)

- Defende q os módulos de alto nível não devem depender dos módulos de baixo nível





















# SOLID

- Sempre manter alta coesão, e baixo acoplamento

- Não deixar um código depender do outro

- Single-responsibility Principle: *Uma classe deve ter um e apenas um motivo para mudar, o que significa que uma classe deve ter apenas uma função.*

- Open-closed Principle: *Os objetos ou entidades devem estar abertos para extensão, mas fechados para modificação.*

- Liskov Substitution Principle: *Seja q(x) uma propriedade demonstrável sobre objetos de x do tipo T. Então q(y) deve ser demonstrável para objetos y do tipo S onde S é um subtipo de T.*

- Interface Segregation Principle: *Um cliente nunca deve ser forçado a implementar uma interface que ele não usa, ou os clientes não devem ser forçados a depender de métodos que não usam.*

- Dependency Inversion Principle: *As entidades devem depender de abstrações, não de implementações. Ele declara que o módulo de alto nível não deve depender do módulo de baixo nível, mas devem depender de abstrações.*

# GRASP

- Controller: *Teste princípio atribui a responsabilidade por lidar com eventos do sistema a uma classe que não esteja relacionada a interface com o usuário.*

- Creator *este princípio determina qual classe deve ser responsável pela criação certos objetos.*

- Alta Coesão: *Este princípio determina que as classes devem se focar apenas na sua responsabilidade.*

- Baixo acoplamento: *Escrever os códigos para nunca dependerem de outros códigos*

- Polimorfismo: *Fazer com que a classe implemente a interface, mas tem que fazer reflexões se toda classe deve implementar a uma interface*

- Pure fabrication (invenção pura): *Uma fabricação/invenção pura é uma classe artificial que não representa um conceito no domínio do problema, especialmente feito para conseguir baixo acoplamento, alta coesão*

- Protected variations (variações protegidas): *Fazer com que o código fique protegido em seus atributos, foco na instabildade da interface*