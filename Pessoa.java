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
public abstract class Pessoa 
{
    String nome, nac, estCivil,ocup, email;
    int rg, cpf,fone;
    
   public Pessoa(String n, String na, String ec, String oc,int r, int c, String e,int f) 
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
   
   public abstract void editarPessoa();
   
   public abstract void excluirPessoa();
   
   public abstract void addPessoa();
   
   
   
}
