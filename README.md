# SA

Proposta do Sistema:

O FerroMonitor é uma solução tecnológica desenvolvida para o setor de mobilidade urbana inteligente, focada no monitoramento em tempo real de redes ferroviárias. A proposta central do projeto consiste na integração de sensores IoT instalados tanto nos trilhos quanto nas locomotivas para a captura contínua de dados operacionais críticos. O sistema centraliza essas informações em um banco de dados para permitir o processamento imediato e a visualização dos ativos, garantindo uma gestão moderna e conectada da infraestrutura ferroviária.

Objetivos do Projeto:

O objetivo principal deste protótipo funcional é fornecer uma plataforma de apoio à tomada de decisão fundamentada em dados reais. O foco do projeto está distribuído em três pilares: otimização do desempenho, implementação de estratégias de manutenção preditiva e reforço da segurança operacional. Para isso, o sistema visa coletar variáveis de velocidade, localização geográfica, consumo de energia e detecção de falhas, transformando dados brutos em dashboards e relatórios analíticos que facilitam a gestão do tráfego e a prevenção de acidentes.

Equipe:

O projeto é desenvolvido por uma equipe técnica comprometida com as boas práticas de programação e gestão de dados, composta por Lucas Lazzarotti, Matheus Guesser, Caio Marques e Luis Pedro Mathias.

Funcionalidades Previstas:

O sistema oferece uma gama abrangente de funcionalidades, iniciando pelo recebimento e processamento de telemetria enviada pelos sensores IoT. Na interface administrativa, o software permite o controle de acesso via login, o redirecionamento seguro para telas de gestão e a visualização do administrador autenticado. As operações de gerenciamento incluem o cadastro, listagem e exclusão de locomotivas e sensores, além da exibição da localização em mapa e do status operacional em tempo real. Para a segurança, o sistema dispara alertas automáticos em pop-up sempre que houver detecção de falhas ou extrapolação de limites técnicos, como temperatura e velocidade. Adicionalmente, o software garante a resiliência operacional ao permitir a sincronização automática de dados armazenados localmente pelos sensores após períodos de queda de conexão.

Especificações Técnicas:

A qualidade e a confiabilidade do FerroMonitor são sustentadas por requisitos não funcionais rigorosos, como a latência máxima de 500ms para o processamento de dados e uma disponibilidade de sistema de 99,9%. A interface foi projetada para ser responsiva e compatível com os principais navegadores do mercado, priorizando a acessibilidade através de diretrizes WCAG e alto contraste em alertas críticos. Além disso, a arquitetura modular do software permite a escalabilidade para milhares de sensores e garante a integridade dos dados e a segurança das sessões dos usuários.