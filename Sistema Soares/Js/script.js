class  Produto {

        constructor(){
                this.id = 1;
                this.arrayprodutos = [];
                this.editId = null;
        }


        adicionar(){
               let produto = this.lerDados();

               if (this.validaCampos(produto)) {
                        if (this.editId == null) {
                                this.enviar(produto);
                        }else {
                                this.atualizar(this.editId, produto);
                        }
                }
        
                
                this.listaTabela();
                this.cancelar();
        }

        listaTabela(){
                let tbody = document.getElementById('tbody');
                tbody.innerText = '';

                for (let i = 0; i< this.arrayprodutos.length; i++) {
                      let tr = tbody.insertRow();
                      let td_id = tr.insertCell(); 
                      let td_unid = tr.insertCell(); 
                      let td_quant = tr.insertCell();
                      let td_desc = tr.insertCell();
                      let td_valorun = tr.insertCell();
                      let td_ipi = tr.insertCell();
                      let td_icms = tr.insertCell();
                      let td_total = tr.insertCell();
                      let td_acoes = tr.insertCell();
                      

                      td_id.innerText = this.arrayprodutos[i].id;
                      td_unid.innerText = this.arrayprodutos[i].unidade;
                      td_quant.innerText = this.arrayprodutos[i].quantidade;
                      td_desc.innerText = this.arrayprodutos[i].descricao;
                      td_valorun.innerText = this.arrayprodutos[i].valorunitario;
                      td_ipi.innerText = this.arrayprodutos[i].ipi;
                      td_icms.innerText = this.arrayprodutos[i].icms;
                      td_total.innerText = this.arrayprodutos[i].total;

                      td_id.style.textAlign = "center";
                      td_unid.style.textAlign = "center";
                      td_quant.style.textAlign = "center";
                      td_ipi.style.textAlign = "center";
                      td_valorun.style.textAlign = "center";
                      td_icms.style.textAlign = "center";
                      td_total.style.textAlign = "center";

                      let imgEdit = document.createElement("img");
                      imgEdit.src = 'img/pen.svg';
                      imgEdit.setAttribute("onclick","produto.edicao("+ JSON.stringify(this.arrayprodutos[i])+");");

                      td_acoes.appendChild(imgEdit);

                      let imgDelet = document.createElement("img");
                      imgDelet.src = 'img/trash.svg';
                      imgDelet.setAttribute("onclick","produto.deletar("+  this.arrayprodutos[i].id+")");

                      td_acoes.appendChild(imgDelet);
                   
                }
        }

        enviar(produto){
                this.arrayprodutos.push(produto);
                this.id++;
        }

        

        lerDados(){
            let produto = {}

            produto.id = this.id;
            produto.descricao = document.getElementById('descitem').value;
            produto.unidade = document.getElementById('unitem').value;
            produto.quantidade = document.getElementById('qntintem').value;
            produto.valorunitario = document.getElementById('vlritem').value;
            produto.ipi = document.getElementById('ipiitem').value;
            produto.icms = document.getElementById('icmsitem').value;  
            produto.total = (produto.valorunitario * produto.quantidade);
          

            return produto;
        }

        edicao(dados) {
                this.editId = dados.id;

                document.getElementById('descitem').value = dados.descricao;
                document.getElementById('unitem').value = dados.unidade;
                document.getElementById('qntintem').value = dados.quantidade;
                document.getElementById('vlritem').value = dados.valorunitario;
                document.getElementById('ipiitem').value = dados.ipi;
                document.getElementById('icmsitem').value = dados.icms;

                document.getElementById('btnadd').innerText = 'Atualizar';
        }

        atualizar(id, produto) {
                for (let i = 0; i < this.arrayprodutos.length; i++) {
                        if (this.arrayprodutos[i].id == id) {
                                this.arrayprodutos[i].unidade = produto.unidade;
                                this.arrayprodutos[i].quantidade = produto.quantidade;
                                this.arrayprodutos[i].descricao = produto.descricao;
                                this.arrayprodutos[i].valorunitario = produto.valorunitario;
                                this.arrayprodutos[i].ipi = produto.ipi;
                                this.arrayprodutos[i].icms = produto.icms;
                        }
                        
                }

        }

        validaCampos(produto){
                let msg = "";

                if (produto.descricao == ""){
                        msg += 'Informe a descrição do item \n';
                }
                if (produto.unidade == ""){
                        msg += 'Informe a unidade de medida \n';
                }
                if (produto.quantidade == ""){
                        msg += 'Informe a quantidade  \n';
                }
                if (produto.unidade == ""){
                        msg += 'Informe a unidade de medida \n';
                }
                if (produto.valorunitario == ""){
                        msg += 'Informe o valor unitário \n';
                }
                if (produto.ipi == ""){
                        msg += 'Informe o IPI  \n';
                }
                if (produto.icms == ""){
                        msg += 'Informe o ICMS \n';
                }
                if( msg != ""){
                        alert(msg);
                        return false
                }

                return true
        }

        deletar(id){
                if (confirm('Deseja excluir o item + ' + id)) {
                        
                }

                let tbody = document.getElementById('tbody');

                for (let i = 0; i< this.arrayprodutos.length; i++) {
                     if (this.arrayprodutos[i].id == id) {
                              this.arrayprodutos.splice(i, 1);  
                              tbody.deleteRow(i);
                     }
                   
                }
                
        }

        cancelar(){

                produto.descricao = document.getElementById('descitem').value = '';
                produto.unidade = document.getElementById('unitem').value = '';
                produto.quantidade = document.getElementById('qntintem').value = '';
                produto.valorunitario = document.getElementById('vlritem').value = '';
                produto.ipi = document.getElementById('ipiitem').value = '';
                produto.icms = document.getElementById('icmsitem').value = '';

                document.getElementById('btnadd').innerText = 'Salvar';
                this.editId = null;
        }
}

var  produto = new Produto();











































