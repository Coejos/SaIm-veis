/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package saimoveis;

/**
 *
 * @author 201504940033
 */
public class Locador extends Pessoa
{
    int cod;

    public Locador(String n, String na, String ec, String oc, int r, int c, String e, int f) {
        super(n, na, ec, oc, r, c, e, f);
    }

  
    public void editarPessoa(String n, String na, String ec, String oc, int r, int c, String e, int f) 
    {
        this.nome=n;
        this.nac=na;
        this.estCivil=ec;
        this.ocup=oc;
        this.rg=r;
        this.cpf=c;
        this.email=e;
        this.fone=f;
         
    }

    public void excluirPessoa(int c) 
    {
        this.cpf=c;
     
    }

    public void addPessoa(String n, String na, String ec, String oc, int r, int c, String e, int f) 
    {
        this.nome=n;
        this.nac=na;
        this.estCivil=ec;
        this.ocup=oc;
        this.rg=r;
        this.cpf=c;
        this.email=e;
        this.fone=f;
    }

    @Override
    public void editarPessoa() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void excluirPessoa() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void addPessoa() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public float prestarContas(int cod)
    {
        
        return 0;
        
    }
    
}
