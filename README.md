# SA

### Proposta do Sistema:

O FerroMonitor é um sistema feito para cuidar de ferrovias de um jeito inteligente e moderno. Ele usa sensores instalados nos trens e nos trilhos para coletar informações o tempo todo. Esses dados são enviados para um computador central, onde são organizados para que os gestores possam acompanhar tudo o que acontece no sistema ferroviário na hora.

### Objetivos do Projeto:

O principal objetivo deste projeto é criar uma ferramenta que ajude a tomar decisões baseadas em fatos reais. O sistema foca em três pontos: melhorar a velocidade e o uso de energia, prever quando os equipamentos precisam de conserto e aumentar a segurança. Para isso, ele registra a velocidade, a localização e possíveis defeitos, transformando esses dados em gráficos e relatórios fáceis de entender.

### Equipe:

O projeto é desenvolvido por Lucas Lazzarotti, Matheus Guesser, Caio Marques e Luis Pedro Mathias.

### Funcionalidades Previstas:

O sistema funciona começando pelo recebimento e processamento das informações enviadas pelos sensores instalados nos trens e trilhos. Na parte de uso administrativo, o software oferece uma tela de login segura que identifica o usuário e dá acesso às páginas de gestão. As ferramentas de gerenciamento permitem que o operador cadastre, liste ou apague sensores e locomotivas, além de acompanhar em um mapa a localização e a velocidade de cada trem em tempo real. Além disso, o software é preparado para não perder dados: se a internet cair, os sensores guardam as informações e as enviam para o banco de dados assim que a conexão voltar.

### Especificações Técnicas:

A qualidade e a confiabilidade do FerroMonitor são sustentadas por requisitos não funcionais rigorosos, como a latência máxima de 500ms para o processamento de dados e uma disponibilidade de sistema de 99,9%. A interface foi projetada para ser responsiva e compatível com os principais navegadores do mercado, priorizando a acessibilidade através de diretrizes WCAG e alto contraste em alertas críticos. Além disso, a arquitetura modular do software permite a escalabilidade para milhares de sensores e garante a integridade dos dados e a segurança das sessões dos usuários.