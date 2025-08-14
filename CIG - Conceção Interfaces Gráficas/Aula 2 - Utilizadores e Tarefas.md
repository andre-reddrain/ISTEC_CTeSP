

# Utilizadores e Tarefas

## Tipos de Utilizadores
- **Principiantes** - Orientados ao objetivo e tarefa. Não querem aprender, mas apenas fazer.
    - Impacientes
- **Principiantes avançados** - Focados em terminar as tarefas rapidamente. Procuram realizar tarefas, não aprender. Ignoram o resto da interface.
    - Impacientes
    - Focados em tarefas específicas
    - Conseguem realizar várias tarefas
    - Não lidam bem com complexidade
- **Executantes Competentes** - Bons a prever como a interface se comporta. Planeiam as tarefas com cuidado. Conseguem diagnosticar e resolver problemas.
    - Conseguem realizar várias tarefas
    - Lidam bem com complexidade
    - Aprendem
- **Peritos** - Altamente motivados. Utilização frequente da interface. Conhecimento alto do domínio. Hábeis na resolução de problemas.

**Resumo**:
<table>
<tr><th>Tópicos<th>Principiantes<th>Principiantes Avançados<th>Executantes Competentes<th>Peritos
<tr><td><b>Receios<td>Medo de falhar e do desconhecido<td><td><td>
<tr><td><b>Foco<td>Completar trabalho real<td>Completar trabalho real<td>Realizar tarefas mais complexas<td>Desenvolver modelo mental
<tr><td><b>Aprendizagem<td>Realizar tarefas em vez de conceitos<td>Realizar tarefas em vez de conceitos<td>Conceitos e realizar tarefas<td>Conceitos e teorias para além do uso normal
<tr><td><b>Modelo Mental<td>Rudimentar<td>Começam a desenvolver devido à realização de tarefas<td>Modelo consistente da interface como um todo<td>Abrangente e consistente
<tr><td><b>Resolução de problemas<td><td><td>Problemas simples<td>Problemas complexos
</table>

## Personas
- Descritas com rigor e detalhe.
- Definidas pelos objetivos que querem atingir.
- Devem ter uma representação visual.
- Definida com detalhes pessoais e físicos.

Ex: O João tem 25 anos, é engenheiro informático, tem um curso de viola clássica, gosta de ver filmes de ficção científica e é fã de tecnologias, possuindo um portátil, um tablet, e um telemóvel de última geração. Durante o curso, o João criou uma banda de covers com a sua namorada e mais dois colegas de curso. Embora a sua profissão de engenheiro numa consultora lhe tome muito tempo, o João todas as terças e quintas à noite junta-se com os outros elementos da banda. Gosta de ser pontual e detesta pessoas desorganizadas e que chegam atrasadas. Por isso, embora a banda não tenha um líder definido, é ele quem assume a liderança coordenadondo os ensaios e escolhendo as músicas a ensaiar. Quando vão atuar, também é ele quem elabora a lista de músicas a ensaiar. Quando vão atuar, também é ele quem elabora a lista de músicas a tocar no concerto e define a sua ordem.

## Análise de tarefas
- **Formal** - Já existe um produto a funcionar.
    - Criar um workflow
- **Informal** - Criar um produto novo.
    - Observar comportamentos

### 11 Perguntas:
- **Boas práticas**
    - Exceto na 1ª pergunta, todas as perguntas devem ser respondidas no **presente** e **sem mencionar** o sistema que vamos desenvolver.
- Interface exemplo - Pauta mágica:
    - Será uma pauta interativa e inteligente que permitirá visualizar toda a informação útil para um músico quando este está a compor, a ensaiar, ou atuar em concerto. Permitirá, ainda, fazer anotações ou recolha de informação relevante.
1. **Quem vai usar o sistema?**
    - *Ex:* Pessoas com formação musical, com idades entre os 18 e os 50 anos. Tocam regularmente, geralmente tocam em casa, sabem usar dispositivos de toque, sabem tocar pelo menos um instrumento musical, têm formação musical, etc...
2. **Que tarefas executam atualmente?**
    - Lista de tarefas
    - Importância relativa das tarefas
    - *Ex:*
        - Tocar música a partir de pautas
        - Ensaiar músicas a partir de pautas
        - Comparar músicas
        - Anotar as pautas com indicações
3. **Que tarefas são desejáveis?**
    - *Ex:*
        - Reprodução de áudio da pauta
        - Descarregar pautas para o dispositivo
        - Deteção de erros enquanto se toca
        - Seguimento visual da pauta
        - Ter uma listagem de pautas disponíveis
4. **Como se aprendem as tarefas?**
    - *Ex:* Os utilizadores aprendem a realizar as tarefas através de cursos de formação de música, de instrumentos e de composição de música.
    - **Resposta errada** - Como o nosso sistema tem uma interface familiar e do tipo walk-up-and-use, o utilizador não precisa de aprender.
    - **Resposta certa** - Atualmente os utilizadores aprendem a realizar as tarefas lendo os manuais de utilizador e perguntando aos colegas de trabalho.
5. **Onde são desempenhadas as tarefas?**
    - Escritório? Oficina? Espaço público?
    - *Ex:* As tarefas são realizadas com mais frequência em casa ou no estúdio, locais onde existe uma boa luz ambiente e normalmente não existe ruído. Quando atuam, as tarefas são realizadas num palco, que tipicamente tem uma luz intensa ou um grande contraste de luzes.
6. **Qual a relação entre o utilizador e a info?**
    - Privacidade
    - *Ex:* A informação relevante para a realização das tarefas está armazenada nas pautas (em papel) e cada utilizador tem as suas. Em alguns casos os utilizadores partilham as pautas ou trocam pautas entre si. Apesar disso, algumas pautas (normalmente as notadas, mas não só) são consideradas privadas pelos utilizadores e não são partilhadas.
7. **Que outros instrumentos tem o utilizador?**
    - Auxílio
    - *Ex:* Os utilizadores usam ferramentas para afinação dos instrumentos (afinador e diapasão), para fazer o acompanhamento musical (leitor de música, rádio, etc.) e o metrónomo.
8. **Como comunicam os utilizadores entre si?**
    - *Ex:* Em casa e no estúdio, os utilizadores comunicam através da fala, dialogando e trocando ideias. No palco, comunicam por gestos.
9. **Qual a frequência das tarefas?**
    - *Ex:* A maior parte dos utilizadores apenas toca música, enquanto uma pequena quantidade toca e compõe músicas. Quando às tarefas mais realizadas, o ensaio de uma música nova é feito com mais frequência, enquanto tocar em público é menos frequente.
10. **Quais as restrições de tempo impostas?**
    - Falta de tempo pode induzir stress
    - *Ex:* Em concerto, os utilizadores acede às pautas em poucos segundos. Nos ensaios, as restrições são menores, mas normalmente não excedem um minuto, para que os colegas não tenham de esperar.
11. **O que acontece se algo corre mal?**
    - Como é que os utilizadores reagem?
    - **Ex:* Num ensaio, quando as coisas correm mal, os utilizadores começam o ensaio do início. Quando estão a compor, corrigem o que correu mal. Num concerto tentam "dar a volta" sem pararem de tocar.

### Características das tarefas
- **Reais e representativas** - Tarefas que os utilizadore realizam, mesmo.
- **O quê e não como** - O que os utilizadores querem fazer.
- **Específicas** - Escolha *uma* cançaõ da playlists vs Escolha *a* canção mais tocada da playlist.
- **Mistura de complexidades** - Testar casos simples e complexos. Complexidade evidencia bugs.
- **Identificar o utilizador** - Personas

## Requisitos de usabilidade
- **Conceitos de Usabilidade**
    - Fácil de usar
    - Eficiência
    - Memória
    - Prevenção de erros
    - Satisfação
- Para cada tarefa:
    - Descrição dos **objetivos** pretendidos
    - Descrição **componentes**
    - Valores desejados de **eficácia, eficiência** e **satisfação**
- **Medidas de Eficácia Globais**
    - % de objetivos alcançados
    - % de utilizadores que completaram com sucesso
    - Média de precisão das tarefas concluídas
- **Medidas de Eficiência Globais**
    - Tempo para completar uma tarefa
    - Tarefas completadas por unidade de tempo
    - Custo monetário de realização da tarefa
- **Medidas de Satisfação Globais**
    - Escala de satisfação
    - Frequência de uso
    - Frequência de reclamações

**Resumo**
- Uma boa **usabilidade** deve ser procurada
- Queremos **Desenvolvimento Centrado no Utilizador**
- Criar **personas** a partir da análise de utilizadores
- Temos **11 perguntas** para focar o nosso design
- Escolher **tarefas reais** a partir da análise de tarefas