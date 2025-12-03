<!DOCTYPE html>
<html>
<head>
<title>C++ Implementations</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
  <h1 class="mb-3">C++ Implementations</h1>
  <div class="card mb-3">
    <div class="card-body">
      <h5>Array</h5>
      <pre>#include &lt;iostream&gt;
using namespace std;
int main(){
int arr[5]={1,2,3,4,5};
for(int i=0;i&lt;5;i++) cout&lt;&lt;arr[i]&lt;&lt;" ";
return 0;
}</pre>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h5>Stack - Infix to Postfix</h5>
      <pre>#include &lt;iostream&gt;
#include &lt;stack&gt;
using namespace std;
int prec(char c){ if(c=='+'||c=='-') return 1; if(c=='*'||c=='/') return 2; return 0; }
string infixToPostfix(string s){
stack&lt;char&gt; st; string res;
for(char c: s){
if(isalnum(c)) res+=c;
else if(c=='(') st.push(c);
else if(c==')'){ while(!st.empty() && st.top()!='('){ res+=st.top(); st.pop(); } st.pop(); }
else{ while(!st.empty() && prec(st.top())>=prec(c)){ res+=st.top(); st.pop(); } st.push(c); }
}
while(!st.empty()){ res+=st.top(); st.pop(); } return res;
}</pre>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h5>Stack - Postfix Evaluation</h5>
      <pre>#include &lt;iostream&gt;
#include &lt;stack&gt;
#include &lt;cctype&gt;
using namespace std;
int evalPostfix(string exp){
stack&lt;int&gt; st;
for(char c: exp){
if(isdigit(c)) st.push(c-'0');
else{ int b=st.top(); st.pop(); int a=st.top(); st.pop();
if(c=='+') st.push(a+b);
if(c=='-') st.push(a-b);
if(c=='*') st.push(a*b);
if(c=='/') st.push(a/b);
}
}
return st.top();
}</pre>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h5>Queue</h5>
      <pre>#include &lt;iostream&gt;
#include &lt;queue&gt;
using namespace std;
int main(){
queue&lt;int&gt; q;
q.push(10); q.push(20); q.push(30);
while(!q.empty()){ cout&lt;&lt;q.front()&lt;&lt;" "; q.pop(); }
return 0;
}</pre>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h5>Trees</h5>
      <pre>#include &lt;iostream&gt;
using namespace std;
struct Node{ int data; Node* left; Node* right; Node(int v):data(v),left(NULL),right(NULL){} };
void inorder(Node* root){ if(!root) return; inorder(root->left); cout&lt;&lt;root->data&lt;&lt;" "; inorder(root->right); }
void preorder(Node* root){ if(!root) return; cout&lt;&lt;root->data&lt;&lt;" "; preorder(root->left); preorder(root->right); }
void postorder(Node* root){ if(!root) return; postorder(root->left); postorder(root->right); cout&lt;&lt;root->data&lt;&lt;" "; }</pre>
    </div>
  </div>
</div>
</body>
</html>
