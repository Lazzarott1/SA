# SA

### Proposta do Sistema:

O FerroMonitor é uma solução tecnológica desenvolvida para o setor de mobilidade urbana inteligente, focada no monitoramento em tempo real de redes ferroviárias. A proposta central do projeto consiste na integração de sensores IoT instalados tanto nos trilhos quanto nas locomotivas para a captura contínua de dados operacionais críticos. O sistema centraliza essas informações em um banco de dados para permitir o processamento imediato e a visualização dos ativos, garantindo uma gestão moderna e conectada da infraestrutura ferroviária.

### Objetivos do Projeto:

O objetivo principal deste protótipo funcional é fornecer uma plataforma de apoio à tomada de decisão fundamentada em dados reais. O foco do projeto está distribuído em três pilares: otimização do desempenho, implementação de estratégias de manutenção preditiva e reforço da segurança operacional. Para isso, o sistema visa coletar variáveis de velocidade, localização geográfica, consumo de energia e detecção de falhas, transformando dados brutos em dashboards e relatórios analíticos que facilitam a gestão do tráfego e a prevenção de acidentes.

### Equipe:

O projeto é desenvolvido por uma equipe técnica comprometida com as boas práticas de programação e gestão de dados, composta por Lucas Lazzarotti, Matheus Guesser, Caio Marques e Luis Pedro Mathias.

### Funcionalidades Previstas:

O sistema funciona começando pelo recebimento e processamento das informações enviadas pelos sensores instalados nos trens e trilhos. Na parte de uso administrativo, o software oferece uma tela de login segura que identifica o usuário e dá acesso às páginas de gestão. As ferramentas de gerenciamento permitem que o operador cadastre, liste ou apague sensores e locomotivas, além de acompanhar em um mapa a localização e a velocidade de cada trem em tempo real. Além disso, o software é preparado para não perder dados: se a internet cair, os sensores guardam as informações e as enviam para o banco de dados assim que a conexão voltar.

### Especificações Técnicas:

A qualidade e a confiabilidade do FerroMonitor são sustentadas por requisitos não funcionais rigorosos, como a latência máxima de 500ms para o processamento de dados e uma disponibilidade de sistema de 99,9%. A interface foi projetada para ser responsiva e compatível com os principais navegadores do mercado, priorizando a acessibilidade através de diretrizes WCAG e alto contraste em alertas críticos. Além disso, a arquitetura modular do software permite a escalabilidade para milhares de sensores e garante a integridade dos dados e a segurança das sessões dos usuários.