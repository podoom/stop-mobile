Paçoca Engine
===

- Proposta: Game Engine para jogos via navegador
- Razão: Tédio
- Como: Network via Ajax. O ideal é websockets WebRTC ou algo mais elegante. Cada arquivo JSON que precisar terá seu listener próprio. Ações dos jogadores utilizão um sender padrão para modificar os JSON que estão sendo ouvidos. Ações que dependerem da ação de outro jogador utilizarão listeners com status idle/busy. Requisições no DB deverão ser minimizadas. Ações somente terão efeito Server Side, pra evitar hacks via alteração de jscript. A única coisa que o jscript fará é e dizer qual ação deve ser feita e todas as tomadas de decição serão server-side.
