"""
High-Performance Benchmark: Tensor Contractions, BLAS, and Einstein Summation
Compares computational throughput and latency of:
1. 2D Matrix Multiplication: BLAS dgemm (A @ B) vs np.einsum('ij,jk->ik')
2. Frobenius Double Contraction: np.einsum('ij,ij->') vs np.sum(A * B) vs trace(A @ B.T)
3. 3rd-Order Tensor Contraction: np.tensordot vs np.einsum
"""

import time
import numpy as np


def benchmark_matrix_products(N=500, iterations=50):
    A = np.random.randn(N, N)
    B = np.random.randn(N, N)

    # 1. BLAS @
    t0 = time.perf_counter()
    for _ in range(iterations):
        C1 = A @ B
    t_blas = (time.perf_counter() - t0) / iterations

    # 2. np.einsum
    t0 = time.perf_counter()
    for _ in range(iterations):
        C2 = np.einsum('ij,jk->ik', A, B, optimize=True)
    t_einsum = (time.perf_counter() - t0) / iterations

    assert np.allclose(C1, C2)
    print(f"Matrix Product ({N}x{N}):")
    print(f"  BLAS @:                 {t_blas * 1e3:.3f} ms")
    print(f"  np.einsum (optimized): {t_einsum * 1e3:.3f} ms")
    print(f"  BLAS Speedup:          {t_einsum / t_blas:.2f}x\n")


def benchmark_double_contractions(N=500, iterations=100):
    A = np.random.randn(N, N)
    B = np.random.randn(N, N)

    # 1. np.sum(A * B) (elementwise vectorized multiply-accumulate)
    t0 = time.perf_counter()
    for _ in range(iterations):
        s1 = np.sum(A * B)
    t_sum = (time.perf_counter() - t0) / iterations

    # 2. np.einsum
    t0 = time.perf_counter()
    for _ in range(iterations):
        s2 = np.einsum('ij,ij->', A, B)
    t_einsum = (time.perf_counter() - t0) / iterations

    assert np.isclose(s1, s2)
    print(f"Frobenius Double Contraction ({N}x{N}):")
    print(f"  np.sum(A * B):         {t_sum * 1e3:.3f} ms")
    print(f"  np.einsum('ij,ij->'):  {t_einsum * 1e3:.3f} ms")
    print(f"  Ratio:                 {t_einsum / t_sum:.2f}x\n")


def benchmark_3d_tensor_contractions(D1=50, D2=50, D3=50, D4=50, iterations=20):
    # Contraction of T_{ijk} with M_{kl} -> R_{ijl}
    T = np.random.randn(D1, D2, D3)
    M = np.random.randn(D3, D4)

    # 1. np.tensordot
    t0 = time.perf_counter()
    for _ in range(iterations):
        R1 = np.tensordot(T, M, axes=([2], [0]))
    t_tensordot = (time.perf_counter() - t0) / iterations

    # 2. np.einsum
    t0 = time.perf_counter()
    for _ in range(iterations):
        R2 = np.einsum('ijk,kl->ijl', T, M, optimize=True)
    t_einsum = (time.perf_counter() - t0) / iterations

    assert np.allclose(R1, R2)
    print(f"3D Tensor Contraction ({D1}x{D2}x{D3} with {D3}x{D4}):")
    print(f"  np.tensordot:          {t_tensordot * 1e3:.3f} ms")
    print(f"  np.einsum (optimized): {t_einsum * 1e3:.3f} ms")
    print(f"  Ratio:                 {t_einsum / t_tensordot:.2f}x\n")


if __name__ == "__main__":
    print("=== Multilinear Algebra & Tensor Contraction Benchmarks ===")
    benchmark_matrix_products()
    benchmark_double_contractions()
    benchmark_3d_tensor_contractions()
