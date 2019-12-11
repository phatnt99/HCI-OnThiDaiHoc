import React, { Component } from 'react';
import { View, Text, Dimensions, TextInput, TouchableOpacity, StyleSheet } from 'react-native';
import Icon from 'react-native-vector-icons/Ionicons';
import { withNavigation } from 'react-navigation';

class Search extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <View>
                <View style={{
                    width: Dimensions.get('window').width - 30,
                    alignSelf: 'center',
                    flexDirection: 'row',
                    alignItems: 'center',
                    marginTop: 15,
                    backgroundColor: '#FFFFFF',
                    elevation: 7
                }}>
                    <Icon name="md-search" size={20} style={{ marginLeft: 5 }} color={'#00817C'} />
                    <TextInput placeholder="Tìm tài liệu.." style={{ height: 40, flex: 1 }} />
                </View>
                <View style={{ padding: 20 }}>

                    <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Loại</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between' }}>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Lí thuyết</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Đề thi</Text>
                            </TouchableOpacity>
                        </View>
                    </View>

                    <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Môn</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between', flexWrap: 'wrap' }}>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Toán</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Lý</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Hóa</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Sinh</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Sử</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Địa</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Anh văn</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>Ngữ Văn</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>GDCD</Text>
                            </TouchableOpacity>
                        </View>
                    </View>

                    <View style={styles.section}>
                        <View style={{ flex: 2 }}><Text>Khối</Text></View>
                        <View style={{ flexDirection: 'row', flex: 8, justifyContent: 'space-between', flexWrap: 'wrap' }}>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>10</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>11</Text>
                            </TouchableOpacity>
                            <TouchableOpacity
                                style={styles.button}>
                                <Text style={styles.titleButton}>12</Text>
                            </TouchableOpacity>
                        </View>
                    </View>

                    <View style={{flexDirection: 'row-reverse', marginTop: 70}}>
                        <TouchableOpacity style={styles.next}
                        onPress={() => {
                            this.props.navigation.navigate('Result');
                        }}>
                            <Icon name="md-arrow-round-forward" size={20} color="#FFFFFF" />
                        </TouchableOpacity>
                    </View>
                </View>
            </View>
        );
    }
}

export default withNavigation(Search);

const styles = StyleSheet.create({
    section: {
        flexDirection: 'row',
        marginTop: 30
    },
    button: {
        width: 80,
        height: 30,
        padding: 4,
        elevation: 4,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#FFFFFF',
        marginBottom: 10
    },
    next: {
        width: 80,
        height: 30,
        padding: 4,
        elevation: 4,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: '#00817C',
        marginBottom: 10
    },
    titleButton: {
        color: '#00817C',
    }
});

