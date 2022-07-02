#include<bits/stdc++.h>
using namespace std;
class Animals
{
private:
    string name;
    int speed;

public:
    void setName(string name)
    {
        this->name = name;
    }

    void setSpeed(int speed)
    {
        this->speed = speed;
    }

    int getSpeed() { return this->speed; }
    string getName() { return this->name; }

    void iteratorTest() {
        for (int i = 0;  i < 10;  i++) {
            cout << i << "\n" ;
        }
    }
};

int main()
{
    Animals Obj ;
    Obj.setName("Cheetah") ;
    Obj.setSpeed(105) ;

    cout << Obj.getName() << endl;
    cout << Obj.getSpeed() << endl;
    Obj.iteratorTest();

    return 0;
}
